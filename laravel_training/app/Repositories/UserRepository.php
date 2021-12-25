<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById($userId)
    {
        return User::findOrFail($userId);
    }

    public function deleteUser($userId)
    {
        User::destroy($userId);
    }

    public function createUser(array $usercreate)
    {
        return User::create($usercreate);
    }

    public function updateUser($userId, array $userUpdate)
    {
        return User::find($userId)->update($userUpdate);
    }

    public function getFulfilledUsers()
    {
        return User::where('is_fulfilled', true);
    }
}
