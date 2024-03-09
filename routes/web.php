<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// rotta per la pagina dei fumetti
Route::get('/', function () {
    $title = 'Fumetti';
    return view('products.index', compact('title'));
})->name('index');

// rotta per la pagina dei personaggi
Route::get('/characters', function () {
    $title = 'characters';
    return view('characters', compact('title') );
})->name('characters');
// rotta per la pagina dei film
Route::get('/movies', function () {
    $title = 'film';
    return view('movies',compact('title'));
})->name('movies');
// rotta per la pagina dei prodotti per la tv
Route::get('/tv', function () {
    $title = 'tv';
    return view('tv', compact('title'));
})->name('tv');
