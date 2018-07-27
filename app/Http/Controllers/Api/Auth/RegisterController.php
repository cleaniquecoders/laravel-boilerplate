<?php

namespace App\Http\Controllers\Api\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
    	]);

    	$user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();

        return response()->api(
        	[
	        	'user' => $user,
	            'access_token' => $tokenResult->accessToken,
	            'token_type' => 'Bearer',
	            'expires_at' => \Carbon\Carbon::parse(
	                $tokenResult->token->expires_at
	            )->toDateTimeString()
	        ], 
	        'You have successfully registered.', 
	        true, 
	        201
	    );
    }
}
