<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->api([], 'You have sucessfully logout.');
    }
}
