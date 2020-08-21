<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function()
{
    return view('intro');
});
Route::get('/index', 'PostsController@index')->middleware('auth');
Route::get('/create', 'PostsController@create')->middleware('auth');
Route::post('/store', 'PostsController@store')->middleware('auth');
Route::get('/edit/{id}', 'PostsController@edit')->middleware('auth');
Route::post('/update/{id}', 'PostsController@update')->middleware('auth');
Route::get('/delete/{id}', 'PostsController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
