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

Route::get('/tim-kiem', 'HomeController@search')->name('search');

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/test', function () {
    return view('pages.genre');
});

Route::get('/truyen/{slug}', 'StoryController@show')->name('view_story');
Route::get('/doc-truyen/{slug}', 'ChapterController@show')->name('view_chapter');
Route::get('/the-loai/{slug}', 'GenreController@show')->name('view_genre');

Route::group(['middleware' => ['adminauth'], 'prefix' => 'admin', 'name' => 'admin'], function () {
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('admin.index');

    Route::resource('/genre', 'GenreController', ['as' => 'admin']);
    Route::resource('/story', 'StoryController', ['as' => 'admin']);
    Route::resource('/chapter', 'ChapterController', ['as' => 'admin']);
});

Route::group(['middleware' => ['auth'], 'name' => 'user'], function () {
    Route::get('/doc-truyen/{slug}/edit', 'T24Controller@editChapter')->name('user.inline.chapter.edit');
    Route::put('/doc-truyen/{id}', 'T24Controller@updateChapter')->name('user.inline.chapter.update');
    Route::get('/follow-story/{slug}', 'T24Controller@followStory')->name('user.follow_story');
    Route::get('/markRead/{id}', 'T24Controller@markRead')->name('user.noti.mark_read');
    Route::get('/ucp/story', 'T24Controller@createStory')->name('user.story.create');
    Route::post('/ucp/story', 'T24Controller@storeStory')->name('user.story.store');
    Route::get('/ucp/story/{slug}/edit', 'T24Controller@editStory')->name('user.story.edit');
    Route::put('/ucp/story/{slug}', 'T24Controller@updateStory')->name('user.story.update');
    Route::get('/ucp/story/list', 'T24Controller@listStory')->name('user.story.list');
    Route::get('/ucp/story/follow-list', 'T24Controller@listFollow')->name('user.story.follow_list');
    Route::get('/ucp/chapter', 'T24Controller@createChapter')->name('user.chapter.create');
    Route::post('/ucp/chapter', 'T24Controller@storeChapter')->name('user.chapter.store');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ucp', 'UserController@show')->name('profile');
