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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/login', 'IndexController@login');
Route::get('/register', 'IndexController@register');
Route::get('/get-projects/{page}', 'IndexController@getProjects');
Route::get('/get-project/{project_id}', 'IndexController@getProject');

Route::post('/like/{project_id}', 'IndexController@likeProject')->name('like');

Route::prefix('user')->group(function(){
    Route::get('add-project', 'UserController@addProject')->name('addProject');
    Route::post('add-project', 'UserController@postAddProject')->name('postAddProject');
    Route::get('settings', 'UserController@settings')->name('settings');
    Route::get('liked-projects', 'UserController@likedProjects')->name('likedProjects');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/set-theme', 'IndexController@setTheme')->name('setTheme');
