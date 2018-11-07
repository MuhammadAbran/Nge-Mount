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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('profile/{id}/edit', 'ProfileController@edit')->name('profile.page');
Route::post('profile/{id}', 'ProfileController@update')->name('profile.update');
Route::post('{id}/profile', 'ProfileController@update_avatar')->name('profile.update_avatar');
Route::delete('/profile', 'ProfileController@del_avatar')->name('del.avatar');
Route::get('/admin', 'AdminController@index')->middleware(['role', 'auth']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
