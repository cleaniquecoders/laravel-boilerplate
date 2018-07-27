<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
    	$request->user()->token()->revoke();
    	
        return response()->api(null, 'Successfully logged out');
    }
}
