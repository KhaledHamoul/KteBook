<?php

use Illuminate\Database\Seeder;
use User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		// user_seeder
		User::create(array(
				'email' => "fk_hamoul@esi.dz",
				'user_name' => "admin",
				'nom' => "adminname",
				'prenom' => "adminfirstname",
				'passwd' => "adminpswd",
				'wilaya' => "tiaret"
			));
	}
}