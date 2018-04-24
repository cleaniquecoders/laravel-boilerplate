<?php

namespace App\Http\Controllers\Api\Datatable\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
		return app('datatables')->eloquent(User::query())->toJson();
    }
}
