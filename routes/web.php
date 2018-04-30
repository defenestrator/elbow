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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/hobbyist', 'hobbyist');
Route::view('/commercial', 'commercial');

Route::get('/activate/please', 'Auth\ActivationController@please');
Route::get('/resendEmail', 'Auth\ActivationController@resendEmail');
Route::get('/activate/{code}', 'Auth\ActivationController@activateAccount');
