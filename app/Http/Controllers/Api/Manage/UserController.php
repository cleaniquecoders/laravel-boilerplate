<?php

namespace App\Http\Controllers\Api\Manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $data = $request->only('name', 'email', 'password');
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        event(new Registered($user));
        $user->syncRoles($request->roles);

        return response()->api([], __('User successfully stored.'), true, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::details()->findByHashSlug($id);

        /**
         * @todo should have a transformer to do this.
         */
        $user  = collect($user->only('name', 'email', 'roles_to_string', 'roles'));
        $roles = $user->get('roles')->mapWithKeys(function ($role) {
            return [$role->id => $role->name];
        });
        $user->put('roles', $roles);

        return response()->api($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param string                   $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        $fields = $request->only('name');

        if (! empty($request->input('password'))) {
            $this->validate($request, [
                'password' => 'required|string|min:6|confirmed',
            ]);
            $fields['password'] = bcrypt($request->input('password'));
        }

        $user = User::findByHashSlug($id);
        $user->update($fields);
        $user->syncRoles($request->input('roles'));

        return response()->api([], __('User successfully updated.'), true, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id == user()->hashslug) {
            return response()->api([], __('You cannot delete yourself!'), false, 401);
        }
        $user = User::findByHashSlug($id);
        if ($user->hasRole('developer')) {
            return response()->api([], __('Trust me, don\'t kill your developer!'), false, 401);
        }
        $user->delete();

        return response()->api([], __('You have successfully delete a user.'));
    }
}
