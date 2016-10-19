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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lorem-ipsum', 'LoremIpsumController@index')->name('lorem-ipsum.index');
Route::post('/lorem-ipsum/generate', 'LoremIpsumController@generate')->name('lorem-ipsum.generate');
