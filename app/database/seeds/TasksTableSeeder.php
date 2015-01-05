<?php

use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		Task::create(array(
      'title' => 'My First Task',
      'user_id' => 1,
      'status' => false
    ));

    Task::create(array(
      'title' => 'My Second Task',
      'user_id' => 1,
      'status' => true
    ));

	}

}