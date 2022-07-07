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

Route::group([
    'namespace' => 'Contact',
    'as' => 'contact.'
], function () {
    Route::get('/', 'ContactController')
        ->name('form');
    Route::post('/', 'ContactController@addMessage')
        ->name('add.message');
    Route::get('/list', 'ContactController@list')
        ->name('list.message');
    Route::get('/show/{id}', 'ContactController@show')
        ->name('show.message');
});
