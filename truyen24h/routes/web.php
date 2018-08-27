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

Route::get('/', 'HomeController@guest')->name('index');

Auth::routes();

Route::get('/test', function () {
    return view('pages.profile');
});
Route::get('/story', function () {
    return view('pages.story');
});

Route::group(['middleware' => ['adminauth']], function () {
    Route::get('/quanly', function() {
        return view('admin.dashboard');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{username}', 'UserController@show')->name('profile');
