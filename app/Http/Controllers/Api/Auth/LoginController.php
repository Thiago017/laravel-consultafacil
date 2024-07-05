<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

/**
 *  Class which make login management.
 */
class LoginController
{
    use \App\Traits\HttpResponse;

    /**
     * @param LoginRequest $loginRequest
     * @return JsonResponse
     */
    public function login(LoginRequest $loginRequest): JsonResponse
    {
        $credentials = $loginRequest->only("email", "password");
        if (Auth::attempt($credentials)) {
            return $this->response("authorized", 200, [
                'token' => $loginRequest->user()->createToken('session')->plainTextToken
            ]);
        }

        return $this->response("Not authorized", 403);
    }
}
