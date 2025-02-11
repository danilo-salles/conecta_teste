<?php

namespace App\Services;

use App\Models\User;

class UserService
{

    public function getAllUsers()
    {
        return User::all();
    }

    public function getUserById(int $id)
    {
        return User::find($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function updateUser(int $id, array $data)
    {
        $user = User::find($id);
        if (!$user) {
            return null;
        }

        $user->update($data);
        return $user;
    }

    public function deleteUser(int $id): bool
    {
        $user = User::find($id);
        if (!$user) {
            return false;
        }

        return $user->delete();
    }
}
