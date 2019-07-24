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

Route::get('about', function () {
    return view('site.about');
});

Route::get('contact', function () {
    return view('site.contact');
});

Route::get('services', function () {
    return view('site.services');
});

Route::get('single-project', function () {
    return view('site.single-project');
});

Route::get('portfolio', function () {
    return view('site.portfolio');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
