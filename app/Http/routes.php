<?php

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/', ['as' => 'index', 'uses' => 'IndexController@index']);
/* news */
Route::get('news', ['as' => 'news', 'uses' => 'NewsController@index']);
Route::get('news/{slug}', ['as' => 'news.record', 'uses' => 'NewsController@cart']);
/* news */
/* gallery */
Route::get('gallery', ['as' => 'news', 'uses' => 'GalleryController@index']);
Route::get('gallery/{title}', ['as' => 'news.record', 'uses' => 'GalleryController@cart']);
/* gallery */

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
