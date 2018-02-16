<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        collect(config('acl.roles'))->each(function ($role) {
            Role::create(['name' => $role]);
        });
    }
}
