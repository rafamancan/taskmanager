<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// login
Route::get('/', 'UserController@index');
Route::post('validateUserLogin', 'UserController@validateUserLogin');

// pages

// initial page
Route::get('home', 'SystemController@home');

// tasks
Route::get('tasks', 'TasksController@new');
Route::post('tasks/new', 'TasksController@create');
