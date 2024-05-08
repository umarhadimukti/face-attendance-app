<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $repository)
    {
        $this->userRepository = $repository;
    }

    public function index()
    {
        $users = $this->userRepository->getAllUsers();

        return response()->json(['status' => 200, 'message' => 'Berhasil Mendapatkan Data!', 'data' => $users]);
    }

    public function show(User $user)
    {
        $user = $this->userRepository->getUserById($user->id);
        return response()->json(['status' => 200, 'message' => 'Berhasil Mendapatkan Data!', 'data' => $user]);
    }
}
