<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function getAllUsers();
    public function getUserById($userid);
    public function deleteUser($userId);
    public function createUser(array $userCreate);
    public function updateUser($userId, array $userUpdate);
}
