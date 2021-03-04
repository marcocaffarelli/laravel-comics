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

Route::get('/', 'PageController@home')->name('homepage');
Route::get('comics_api', 'PageController@comics_api')->name('comics_api');

Auth::routes();


// Solo per l'admin
Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('comics', 'ComicController');
    Route::resource('articles', 'ArticleController');

});