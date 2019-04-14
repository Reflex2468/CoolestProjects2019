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

Route::get('/', 'IndexController@index');
Route::get('/login', 'IndexController@login');
Route::get('/register', 'IndexController@register');

Route::get('/add-project', 'IndexController@addproject')->name('add-project');
Route::get('/my-projects', 'IndexController@myprojects')->name('my-projects');
Route::get('/liked-projects', 'IndexController@likedprojects')->name('liked-projects');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
