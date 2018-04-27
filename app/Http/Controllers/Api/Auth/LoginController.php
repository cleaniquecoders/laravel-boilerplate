<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->api([], 'Invalid Credentials.', false, 401);
            }
        } catch (JWTException $e) {
            return response()->api([], 'Could not create token.', false, 500);
        }

        return response()->api($token);
    }
}
