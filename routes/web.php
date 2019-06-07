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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'MainPageController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

Route::get('/projects/create', 'ProjectController@create')->middleware('verified');
Route::post('/projects', 'ProjectController@store');
Route::get('/projects/{project}', 'ProjectController@show');
Route::get('/projects/{project}/edit', 'ProjectController@edit');
Route::get('/create-new-project', 'ProjectController@create_without_register');
Route::post('/create-new-project', 'ProjectController@store_create_without_register');

Route::patch('/projects/{project}', 'ProjectController@update');

Route::post('/contact-us', 'ProjectController@contact');

Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
