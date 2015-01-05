<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::create(array(
      'username' => 'johndoe',
      'email' => 'john@doe.com',
      'password' => md5('123'),
      'key' => '54a9bf1b0dbce'
		));
	}

}