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
            config('permission.models.role')::updateOrCreate(['name' => $role]);
        });

        $permissions->each(function ($roles, $permission) use ($actions, $guards) {
            $actions->each(function ($action) use ($roles, $permission, $guards) {
                $name = kebab_case($permission . '-' . $action);
                config('permission.models.permission')::updateOrCreate(['name' => $name])->syncRoles($roles);
            });
        });
    }
}
