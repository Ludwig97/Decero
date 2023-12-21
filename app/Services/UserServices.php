<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserServices
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function ListarReporsitory(Request $request, UserRepository $userRepository)
    {
        $users = $this->userRepository->ListarUserReporsitory($request);
    }
    // public function crearuser(Request $request, UserRepository $userRepository)
    // {
    //     $user = $this->userRepository->storeUserRepository($request->name, $request->email, $request->status, $request->password);
    // }
}
