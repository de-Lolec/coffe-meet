<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class RegisterController
{
    public function __invoke(AuthRegisterRequest $request): JsonResponse
    {
        $request = $request->validated();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        $token = $user->createToken('myAppToken')->plainTextToken;

        $response = [
            'token' => $token,
        ];

        return response()->json($response, 201);
    }
}
