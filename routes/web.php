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
    $title = 'home';
    $info = compact('title');
    return view('pages.home', $info);
});

Route::get('/comics', function () {
    $title = 'comics';
    $info = compact('title');
    return view('pages.comics', $info);
});

Route::get('/movies', function () {
    $title = 'movies';
    $info = compact('title');
    return view('pages.movies', $info);
});