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

Auth::routes();

Route::post('/follow/{user}', 'followsController@store');
Route::post('/disciple/{user}', 'DisciplesController@store');

Route::get('/profile/', 'ProfilesController@home_profile')->name('profile');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile');
