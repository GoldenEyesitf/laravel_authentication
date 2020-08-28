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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newLogin', function () {
    return view('Login');
});
Route::get('/newRegister', function () {
    return view('Register');
});
Route::get('/forget_password', function () {
    return view('ForgetPassword');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
