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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/test', function () {
    return view('pages.profile');
});

Route::get('/truyen/{slug}', 'StoryController@show')->name('view_story');
Route::get('/doc-truyen/{slug}', 'ChapterController@show')->name('view_chapter');

Route::group(['middleware' => ['adminauth'], 'prefix' => 'admin', 'name' => 'admin'], function () {
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('admin.index');

    Route::resource('/genre', 'GenreController', ['as' => 'admin']);
    Route::resource('/story', 'StoryController', ['as' => 'admin']);
    Route::resource('/chapter', 'ChapterController', ['as' => 'admin']);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile/{username}', 'UserController@show')->name('profile');
