<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TasksTableSeeder extends Seeder {

	public function run()
	{
		Task::create(array(
      'user_id' => '1',
      'title' => 'My First Task',
      'status' => false
    ));

    Task::create(array(
      'user_id' => '1',
      'title' => 'My Second Task',
      'status' => false
    ));

    Task::create(array(
      'user_id' => '2',
      'title' => 'Done this API',
      'status' => false
    ));

    Task::create(array(
      'user_id' => '1',
      'title' => 'Another Task',
      'status' => true
    ));
	}

}