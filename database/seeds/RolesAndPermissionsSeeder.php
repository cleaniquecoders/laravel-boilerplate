<?php

use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        $acl         = collect(config('acl'));
        $actions     = collect($acl->get('actions'));
        $roles       = collect($acl->get('roles'));
        $permissions = collect($acl->get('permissions'));
        $guards      = collect(config('auth.guards'));

        $roles->each(function ($role) use ($guards) {
            $guards->each(function ($guard, $guard_name) use ($role) {
                config('permission.models.role')::updateOrCreate(['name' => $role, 'guard_name' => $guard_name]);
            });
        });

        $permissions->each(function ($roles, $permission) use ($actions, $guards) {
            $actions->each(function ($action) use ($roles, $permission, $guards) {
                $name = $permission . '_' . $action;
                $guards->each(function ($guard, $guard_name) use ($name, $roles) {
                    config('permission.models.permission')::updateOrCreate(['name' => $name, 'guard_name' => $guard_name])->syncRoles($roles);
                });
            });
        });
    }
}
