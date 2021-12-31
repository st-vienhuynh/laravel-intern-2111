<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\TaskResource;
use App\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getTasksByUserId($id)
    {
        $user = new UserResource($this->userRepository->getUserById($id));
        return [
            'user' => $user
        ];
    }
}
