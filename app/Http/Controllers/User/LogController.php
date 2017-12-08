<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke()
    {
        $logs = auth()->user()->activity;
        return view('users.log', compact('logs'));
    }
}
