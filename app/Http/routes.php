<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
    return view('welcome');
})->name('home.welcome');

Route::auth();
Route::resource('item', 'ItemController',['except'=>['show','edit']]);
Route::get('item/{item}', 'ItemController@edit');
Route::get('/home', 'HomeController@index')->name('home');
