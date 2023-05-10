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

    return view('index')
    ->with(config('banner'))
    ->with(config('navigation'))
    ->with(config('comics'));

})->name('index');

Route::get('/characters', function(){

    return view('characters') 
    ->with(config('navigation'));

})->name('characters');

Route::get('/movies', function(){

    return view('movies') 
    ->with(config('banner'))
    ->with(config('navigation'));

})->name('movies');
