<?php

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/', ['as' => 'index', 'uses' => 'IndexController@index']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
