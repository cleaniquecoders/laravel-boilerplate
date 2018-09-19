<?php

namespace App\Http\Controllers\Api\Datatable\Manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Transformers\Datatable\UserTransformer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        return app('datatables')
            ->eloquent(User::datatable())
            ->setTransformer(new UserTransformer())
            ->toJson();
    }
}
