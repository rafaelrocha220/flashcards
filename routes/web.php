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
    return view('welcome');
});


Route::prefix('user')->group(function(){
    
    Route::get('/app/{id?}', 'userAppCards@getIndex')->name('app.cards');

    Route::get('/home', 'homeApp@getIndex')->name('app.home');

    Route::post('/app/list', 'userAppCards@getResponse')->name('app.reponsecard');

    Route::post('/app/input', 'userAppCards@getResponseInput')->name('app.reponsecardinput');
    
});

Route::prefix('admin')->group(function(){
    // Admin routes
});
