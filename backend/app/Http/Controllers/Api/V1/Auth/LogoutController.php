<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Http\JsonResponse;

class LogoutController
{
    public function __invoke(): JsonResponse
    {
        $user = auth()->user();
        $user->tokens()->delete();

        return response()->json(['data' => ['message' => 'you logout']]);
    }
}
