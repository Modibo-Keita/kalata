<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/voterdash', [App\Http\Controllers\VotantController::class], 'dash')->name('voterdash');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/election', function () {
    return view('pages/election');
})->name('election');

Route::get('/candidat', function () {
    return view('pages/candidat');
})->name('candidat');

Route::get('/electeur', function () {
    return view('pages/electeur');
})->name('electeur');

Route::get('/asso', function () {
    return view('pages/asso');
})->name('asso');

Route::get('/voter', function () {
    return view('pages/voter');
})->name('voter');
