<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

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

    public function store()
    {
        auth()->user()->addMediaFromRequest('avatar')
            ->preservingOriginal()
            ->toMediaCollection();
    }
}
