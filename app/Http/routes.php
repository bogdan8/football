<?php

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/', ['as' => 'index', 'uses' => 'IndexController@index']);
/* news */
Route::get('news', ['as' => 'news', 'uses' => 'NewsController@index']);
Route::get('news/{slug}', ['as' => 'news.record', 'uses' => 'NewsController@cart']);
/* news */
/* gallery */
Route::get('gallery', ['as' => 'gallery', 'uses' => 'GalleryController@index']);
Route::get('gallery/{title}', ['as' => 'gallery.show', 'uses' => 'GalleryController@cart']);
/* gallery */
/* kfc */
Route::group(
    ['prefix' => 'kfc'],
    function () {
        Route::get('spending', ['as' => 'spending', 'uses' => 'KfcController@spending']);
    });
/* kfc */


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('administrator_database_clear', ['as' => 'adm', 'uses' => 'AdmController@index']);
