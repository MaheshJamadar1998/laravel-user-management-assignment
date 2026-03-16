<?php
namespace App\Services;

use App\BO\UserBO;
use Illuminate\Support\Facades\Cache;

class UserService
{

    protected $userBO;

    public function __construct(UserBO $userBO)
    {
        $this->userBO = $userBO;
    }

    public function createUser($data)
    {
        $user = $this->userBO->createUser($data);

        Cache::put('user_'.$user->id, $user, 60);

        return $user;
    }

    public function updateUser($id, $data)
    {
        $user = $this->userBO->updateUser($id,$data);

        Cache::forget('user_'.$id);

        return $user;
    }

    public function getUser($id)
    {

        return Cache::remember('user_'.$id,60,function() use ($id){

            return app('App\DAO\UserDAO')->getUser($id);

        });

    }

}