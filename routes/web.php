<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index');

Route::get('about', 'SiteController@about');

Route::get('portfolio', 'SiteController@portfolio');

Route::get('services', 'SiteController@services');

Route::get('single-project/{slug}', 'SiteController@project');

Route::get('contact', 'SiteController@contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
