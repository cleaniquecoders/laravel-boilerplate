<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('manage.passport.index');
    }
}
