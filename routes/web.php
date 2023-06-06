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
    $films = config('dbFilm');

    $barraInfo = config('dbBarraInfo');

    return view('home',compact('films','barraInfo'));
});


Route::get('/info/{slug}', function ($slug) {

    $dbFilm = config('dbFilm');

    $filmArray = array_filter($dbFilm, fn($dbFilm) => $dbFilm['slug'] === $slug);

    $film = $filmArray[array_key_first($filmArray)];

    return view('infoFilm',compact('film'));

})->name('infoFilm');


