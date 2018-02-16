<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function show()
    {
    	return view('users.password.show');
    }

    public function update(Request $request)
    {
    	$request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        auth()->user()->password = bcrypt($request->password);
        auth()->user()->save();

        swal()->success('Password updated.');

        return redirect()->route('user.show');
    }
}
