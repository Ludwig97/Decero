<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(Request $request, UserServices $userServices)
    {
        return view('layouts.index', [
            'users' => User::where('status', '1')->get(),
        ]);
    }
    public function create()
    {
        return view('layouts.create');
    }

    public function store(Request $request)
    {
        // Si el formulario fue enviado, procesa los datos
        if ($request->isMethod('post')) {
            // Validación de datos
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:8',
            ]);

            // Crear un nuevo usuario
            $user = User::create($validatedData);

            // Puedes redirigir a otra vista o hacer cualquier otra cosa que necesites
            return redirect()->route('user.index')->with('success', 'Usuario agregado exitosamente');
        }

        // Si no, simplemente muestra el formulario
        return view('layouts.create');
    }
    public function edit(Request $request, $id)
    {
        $user = User::findOrfail($id);
        return view('layouts.edit', compact('user'));
    }
    // public function update(Request $request)
    // {
    //    $users = User::find('id');
    //    $validatedData = $request->validate([
    //     'name' => 'string|max:255',
    //     'email' => 'email|unique:users',
    //     'password' => 'string|min:8',
    //    ]);
    //    $users = User::create($validatedData);
    //    return view('layouts.index');
    // }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8',
        ]);

        // Obtener el usuario por su ID
        $user = User::findOrFail($id);

        // Actualizar los datos
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Actualizar la contraseña si se proporcionó
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }

        // Guardar los cambios
        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario actualizado correctamente');
    }
    public function destroy($id)
    {
        // Obtener el usuario por su ID
        $user = User::findOrFail($id);

        // Eliminar el usuario
        $user->delete();

        // Redirigir a alguna parte, por ejemplo, a la lista de usuarios
        return redirect()->route('user.index')->with('success', 'Usuario eliminado correctamente');
    }

}

