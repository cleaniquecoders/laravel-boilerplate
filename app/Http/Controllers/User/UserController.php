<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();

        return view('users.show', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
        ]);

        auth()->user()->update(['name' => $request->name]);

        swal()->success('Profile updated.');

        return redirect()->route('user.show');
    }
}
