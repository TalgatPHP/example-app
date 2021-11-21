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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/films', [App\Http\Controllers\FilmController::class, 'index'])->name('film.index');
Route::get('/films/{id}',[App\Http\Controllers\FilmController::class,'show'])->name('film.show');
Route::get('/films/genre/{genre}', [App\Http\Controllers\FilmController::class, 'allByGenre'])->name('film.genre');
Route::get('/create', [App\Http\Controllers\FilmController::class,'create'])->name('films.create');
Route::post('/', [App\Http\Controllers\FilmController::class,'store'])->name('films.store');