<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\UserInformation;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();

		User::create([
			'email' => 'admin@admin.com',
			'password' => Hash::make('admin'),
			'super_user' => 1
		]);

		User::create([
			'email' => 'standard@standard.com',
			'password' => Hash::make('standard'),
			'super_user' => 0
		]);

		UserInformation::create([
			'user_id' => 1,
			'first_name' => 'Admin',
			'last_name' => 'Jefferson'
		]);

		UserInformation::create([
			'user_id' => 2,
			'first_name' => 'Basic',
			'last_name' => 'Beach'
		]);


		$this->command->info('all tables Seeded!');

	}

}
