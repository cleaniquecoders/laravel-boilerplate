<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function show()
    {
        return view('users.avatar');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpg,png',
        ]);

        auth()->user()->addMediaFromRequest('avatar')
            ->preservingOriginal()
            ->usingFileName('avatar.png')
            ->toMediaCollection('avatar');

        audit(user(), 'Uploaded new avatar');

        alert()->success('New Avatar Uploaded');

        return redirect()->route('user.show.avatar');
    }
}
