<?php

namespace App\Http\Controllers\Api\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AclController extends Controller
{
    public function __invoke(Request $request)
    {
    	switch ($request->type) {
    		case 'create':
    			$permissions = [
    				$request->permission . '_create',
    				$request->permission . '_store',
    			];
    			break;
	    	case 'view':
    			$permissions = [
    				$request->permission . '_index',
    				$request->permission . '_show',
    			];
    			break;
    		case 'update':
    			$permissions = [
    				$request->permission . '_edit',
    				$request->permission . '_update',
    			];
    			break;
    		case 'destroy':
    			$permissions = [
    				$request->permission . '_destroy',
    			];
    			break;
    	}

    	$role = role($request->role);

    	foreach ($permissions as $permission) {
            if($request->revoke) {
                $role->revokePermissionTo($permission);
            } else {
                $role->givePermissionTo($permission);
            }
    	}
    }
}