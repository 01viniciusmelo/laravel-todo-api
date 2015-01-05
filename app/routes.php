<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Default
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

// Tasks - API
Route::get('api', array('as' => 'api', 'uses' => 'HomeController@api'));
Route::get('api/tasks', array('as' => 'get_tasks', 'uses' => 'TasksController@index'));
Route::post('api/tasks', array('as' => 'new_task', 'uses' => 'TasksController@store'));
Route::get('api/tasks/{id}', array('as' => 'get_task', 'uses' => 'TasksController@show'));
Route::put('api/tasks/{id}', array('as' => 'update_task', 'uses' => 'TasksController@update'));
Route::delete('api/tasks/{id}', array('as' => 'delete_task', 'uses' => 'TasksController@delete'));

// Account - User
Route::get('/account', array('as' => 'account', 'uses' => 'AccountController@index'));
Route::get('/account/login', array('as' => 'account_login', 'uses' => 'AccountController@login'));
Route::get('/account/logout', array('as' => 'account_logout', 'uses' => 'AccountController@logout'));
Route::get('/account/register', array('as' => 'new_account', 'uses' => 'AccountController@create'));
Route::get('/account/profile', array('as' => 'get_account', 'uses' => 'AccountController@profile'));
Route::get('/account/change-password', array('as' => 'change_password', 'uses' => 'AccountController@password'));

App::missing(function($exception)
{
    $err_message = array(
      'error_code' => 'This route does\'t exists'
    );

    return Response::json($err_message, 400);
});