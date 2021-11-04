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


Route::get('/','SiteController@index')->name('home');

Route::namespace('Admin')->name('admin')->prefix('Admin12')->group(function(){
    Route::get('/','AdminController@index')->name('home');
    Route::resource('products','ProductController');

});
