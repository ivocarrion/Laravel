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



Route::view('/', 'home')->name('home');

// Route::resource('escuelas', 'EscuelaController')->middleware('auth');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('escuelas', 'EscuelaController');
    Route::resource('alumnos', 'AlumnoController');
});

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
