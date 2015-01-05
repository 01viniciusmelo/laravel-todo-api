<?php

class Task extends \Eloquent {
	protected $fillable = ['title', 'user_id', 'status'];

  /**
   * Valid data of task
   * @param array $data
   * @return bool
   */
  public static function validate($data){
    // Check if TITLE and AUTHOR_ID exists
    if( !isset($data['title']) && !isset($data['key']) ){
      return false;
    }

    // Verify if title length it's gt 1 character
    if( strlen($data['title']) < 1 ){
      return false;
    }

    if(!isset($data['status'])){
      $data['status'] = false;
    }

    // Verify if exists some user with this ApiKey
    $user = DB::table('users')->where('key', $data['key'])->get();
    if(count($user) < 1){
      return false;
    }

    Task::create(array(
      'title' => $data['title'],
      'user_id' => (int) $user[0]->id,
      'status' => (bool) $data['status']
      ));

    return true;
  }
}