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
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@showWelcome'));

// Tasks - API
Route::get('/tasks', array('as' => 'get_tasks', 'uses' => 'TasksController@index'));
Route::post('/tasks', array('as' => 'new_task', 'uses' => 'TasksController@store'));
Route::get('/tasks/{id}', array('as' => 'get_task', 'uses' => 'TasksController@show'));
Route::put('/tasks/{id}', array('as' => 'update_task', 'uses' => 'TasksController@update'));
Route::delete('/tasks/{id}', array('as' => 'delete_task', 'uses' => 'TasksController@delete'));

// Account - User
Route::get('/account', array('as' => 'account', 'uses' => 'AccountController@index'));
Route::get('/account/login', array('as' => 'account_login', 'uses' => 'AccountController@login'));
Route::get('/account/logout', array('as' => 'account_logout', 'uses' => 'AccountController@logout'));
Route::get('/account/register', array('as' => 'new_account', 'uses' => 'AccountController@login'));
Route::get('/account/profile', array('as' => 'get_account', 'uses' => 'AccountController@profile'));
Route::get('/account/change-password', array('as' => 'change_password', 'uses' => 'AccountController@password'));