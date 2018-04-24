<?php

use Illuminate\Database\Seeder;
use Illuminate\Auth\Events\Registered;

class DevelopmentSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$roles = collect(config('acl.roles'));

		$roles->each(function($role) {
			$name = title_case($role);
			$email = $role . '@app.com';
			$password = bcrypt($role);

			$user = \App\Models\User::create([
				'name' => $name,
				'email' => $email,
				'password' => $password,
			]);

			event(new Registered($user));

			if(! $user->hasRole($role)) {
				$user->assignRole($role);
			}
		});
	}
}
