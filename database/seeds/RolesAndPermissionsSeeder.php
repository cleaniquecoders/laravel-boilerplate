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

        $roles->each(function ($role) {
            config('permission.models.role')::updateOrCreate(['name' => $role]);
        });

        $permissions->each(function ($roles, $permission) use ($actions) {
            $actions->each(function ($action) use ($roles, $permission) {
                $name = kebab_case($permission . '-' . $action);
                config('permission.models.permission')::updateOrCreate(['name' => $name])->syncRoles($roles);
            });
        });
    }
}
