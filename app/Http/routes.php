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
        Route::get('fundraiser', ['as' => 'fundraiser', 'uses' => 'KfcController@fundraiser']);
        Route::get('list_of_candidates', ['as' => 'list_of_candidates', 'uses' => 'KfcController@list_of_candidates']);
        Route::get('list_of_candidates/{year}', ['as' => 'list_of_candidates_year', 'uses' => 'KfcController@list_of_candidates_year']);
        Route::get('regulations', ['as' => 'regulations', 'uses' => 'KfcController@kfc_regulations_number']);
        Route::get('regulations/{id}', ['as' => 'regulations', 'uses' => 'KfcController@kfc_regulations_terms']);
    });
/* kfc */
/* matches */
Route::get('matches', ['as' => 'matches', 'uses' => 'MatchesController@index']);
Route::get('matches/season/{id}', ['as' => 'season', 'uses' => 'MatchesController@season']);
Route::get('matches/season/{id}/standings', ['as' => 'standings', 'uses' => 'MatchesController@standings']);
Route::get('matches/season/{id}/standings/{id_racing}/racing', ['as' => 'standings', 'uses' => 'MatchesController@racing']);
/* matches */


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('kernel_adm_middleware', ['as' => 'adm', 'uses' => 'KernController@index']);
