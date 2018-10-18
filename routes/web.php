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
    return view('index');
});

Route::get('/index', [
    'uses' => 'MyController@Index',
    'as' => 'index'
]);

Route::get('/about', [
    'uses' => 'MyController@About',
    'as' => 'about'
]);

Route::get('/contact', [
    'uses' => 'MyController@Contact',
    'as' => 'contact'
]);

Route::get('/education', [
    'uses' => 'MyController@Education',
    'as' => 'education'
]);

Route::get('/experience', [
    'uses' => 'MyController@Experience',
    'as' => 'experience'
]);

Route::get('/projects', [
    'uses' => 'MyController@Projects',
    'as' => 'projects'
]);

Route::get('/skills', [
    'uses' => 'MyController@Skills',
    'as' => 'skills'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
