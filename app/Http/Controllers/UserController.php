<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(UserRequest $request)
    {

        $user = $this->userService->createUser($request->validated());

        return response()->json([
            'message' => 'User created successfully',
            'data' => $user
        ],201);

    }

    public function update(UserRequest $request,$id)
    {

        $user = $this->userService->updateUser($id,$request->validated());

        return response()->json([
            'message' => 'User updated successfully',
            'data' => $user
        ],200);

    }

    public function show($id)
    {

        $user = $this->userService->getUser($id);

        return response()->json($user,200);

    }

}