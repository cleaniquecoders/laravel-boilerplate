<?php

namespace OSI\Http\Controllers\User;

use OSI\Http\Controllers\Controller;
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

        userlog(auth()->user(), 'Uploaded new avatar');

        alert()->success('New Avatar Uploaded');

        return redirect()->route('show.avatar');
    }
}
