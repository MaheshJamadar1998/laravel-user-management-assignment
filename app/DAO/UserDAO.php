<?php
namespace App\DAO;

use App\Models\User;

class UserDAO
{

    public function createUser($data)
    {
        return User::create($data);
    }

    public function updateUser($id, $data)
    {
        $user = User::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function getUser($id)
    {
        return User::findOrFail($id);
    }

}