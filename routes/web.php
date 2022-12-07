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
    return view('home1');
});

Auth::routes();

Route::resource('inscriptions',App\Http\Controllers\InscriptionController::class);
Route::resource('games',App\Http\Controllers\GameController::class);
Route::resource('individuals',App\Http\Controllers\IndividualController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

