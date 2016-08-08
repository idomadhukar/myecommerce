<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses'=>'UsersController@index','as'=>'homepage']);
Route::get('users/login','UsersController@login');
Route::get('users/register','UsersController@register');
Route::post('users/register',['uses'=>'UsersController@registerUser','as'=>'saveUsers']);
//Route::auth();

//Route::get('/home', 'HomeController@index');
