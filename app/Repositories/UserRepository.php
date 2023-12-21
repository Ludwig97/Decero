<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    const estado_activo = 1;
    const estado_inactivo = 0;

    public function ListarUserReporsitory(Request $request)
    {
        $users = User::findOrfail();
    }
    public function storeUserRepository(Request $request, $name, $email, $status, $password)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->status = $status;
        $user->password = Hash::make($password);
        $user->save();
        return $user;

    }

}
