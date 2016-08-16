<?php

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::get('/discussion', ['as' => 'discussion', 'uses' => 'IndexController@discussion']);
/* news */
Route::get('news', ['as' => 'news', 'uses' => 'NewsController@index']);
Route::get('news/{slug}', ['as' => 'news.record', 'uses' => 'NewsController@cart']);
/* news */
/* gallery */
Route::get('gallery', ['as' => 'gallery', 'uses' => 'GalleryController@index']);
Route::get('gallery/all_photo', ['as' => 'gallery.all_photo', 'uses' => 'GalleryController@all_photo']);
Route::get('gallery/{title}', ['as' => 'gallery.show', 'uses' => 'GalleryController@cart']);
/* gallery */
/* kfc */
Route::group(
    ['prefix' => 'kfc'],
    function () {
        Route::get('', function(){
            return redirect('kfc/fundraiser');
        });
        Route::get('spending', ['as' => 'spending', 'uses' => 'KfcController@spending']);
        Route::get('fundraiser', ['as' => 'fundraiser', 'uses' => 'KfcController@fundraiser']);
        Route::get('list_of_candidates', ['as' => 'list_of_candidates', 'uses' => 'KfcController@list_of_candidates']);
        Route::get('list_of_candidates/{year}', ['as' => 'list_of_candidates_year', 'uses' => 'KfcController@list_of_candidates_year']);
        Route::get('regulations', ['as' => 'regulations', 'uses' => 'KfcController@kfc_regulations_number']);
        Route::get('regulations/{id}', ['as' => 'regulations', 'uses' => 'KfcController@kfc_regulations_terms']);
        Route::get('program', ['as' => 'program', 'uses' => 'KfcController@kfc_program_number']);
        Route::get('program/{id}', ['as' => 'program', 'uses' => 'KfcController@kfc_program_terms']);
    });
/* kfc */
/* matches */
Route::group(
    ['prefix' => 'matches'],
    function () {
        Route::get('', ['as' => 'matches', 'uses' => 'MatchesController@index']);
        Route::get('season/{id}', ['as' => 'season', 'uses' => 'MatchesController@season']);
        Route::get('season/{id}/standings/{id_racing}/racing', ['as' => 'standings', 'uses' => 'MatchesController@racing']);
    });
/* matches */
/* team */
Route::group(
    ['prefix' => 'teams'],
    function () {
        Route::get('', function(){
            return redirect('teams/storage');
        });
        Route::get('storage', ['as' => 'storage', 'uses' => 'TeamsController@storage']);
        Route::get('matches', ['as' => 'matches', 'uses' => 'TeamsController@matches_season']);
        Route::get('standings', ['as' => 'matches', 'uses' => 'TeamsController@standings']);
        Route::get('standings/{id}', ['as' => 'matches', 'uses' => 'TeamsController@standings_season']);
        Route::get('season/{id}', ['as' => 'season', 'uses' => 'TeamsController@season']);
        Route::get('season/{id}/standings/{id_racing}/racing', ['as' => 'standings', 'uses' => 'TeamsController@racing']);
        Route::get('browsing_history', ['as' => 'browsing_history', 'uses' => 'TeamsController@browsing_history']);
        Route::get('browsing_history_people/{mounts}', ['as' => 'browsing_history_people', 'uses' => 'TeamsController@browsing_history_people']);
        Route::get('report', ['as' => 'report', 'uses' => 'TeamsController@report']);
        Route::get('report/season/{id}', ['as' => 'report_season', 'uses' => 'TeamsController@report_season']);
        Route::get('report/season/{id}/report_tour/{id_route}', ['as' => 'report_season', 'uses' => 'TeamsController@report_season_tour']);
    });
/* team */
/* school */
Route::group(
    ['prefix' => 'school'],
    function () {
        Route::get('', function(){
            return redirect('school/junior_group');
        });
        Route::get('junior_group', ['as' => 'junior_group', 'uses' => 'SchoolsController@junior_group']);
        Route::get('senior_group', ['as' => 'senior_group', 'uses' => 'SchoolsController@senior_group']);
        Route::get('junior_group_people/{mounts}', ['as' => 'junior_group_people', 'uses' => 'SchoolsController@junior_group_people']);
        Route::get('senior_group_people/{mounts}', ['as' => 'senior_group_people', 'uses' => 'SchoolsController@senior_group_people']);

    });
/* school */
/* platform */
Route::get('platform', ['as' => 'platform', 'uses' => 'PlatformsController@index']);
/* platform */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);