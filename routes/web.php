<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/todos', function () {
    return view('todos.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/form-csrf', function () {
    return view('test-csrf');
});

Route::post('/form-csrf', function () {
    return 'Données soumises en toute sécurité.';
})->middleware('check.useragent');
