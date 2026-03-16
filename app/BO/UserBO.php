<?php
namespace App\BO;

use App\DAO\UserDAO;
use Illuminate\Support\Facades\Hash;

class UserBO
{

    protected $userDAO;

    public function __construct(UserDAO $userDAO)
    {
        $this->userDAO = $userDAO;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);

        return $this->userDAO->createUser($data);
    }

    public function updateUser($id, $data)
    {
        if(isset($data['password'])){
            $data['password'] = Hash::make($data['password']);
        }

        return $this->userDAO->updateUser($id, $data);
    }

}