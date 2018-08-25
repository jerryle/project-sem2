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
    return view('layouts.home.dashboard');
});

Auth::routes();

Route::get('/test', function () {
    return view('layouts.home.profile');
});
Route::get('/story', function () {
    return view('layouts.home.story');
});
Route::get('/quanly', function() {
    return view('admin');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@show')->name('profile');
