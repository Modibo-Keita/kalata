<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssoController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\VoteController;
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



// groupe middleware
Route::middleware(['auth', 'isAdmin'])->group(function () {
    //Accueil admin dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // elections
    Route::get('/election', [ElectionController::class, "index"])->name('election');
    Route::post('/election', [ElectionController::class, "store"])->name('election');
    Route::delete('/election/{election}', [ElectionController::class, "delete"])->name('election.supprimer');
    Route::get('/election/{election}', [ElectionController::class, "edit"])->name('election.edit');
    Route::put('/election/{election}', [ElectionController::class, "update"])->name('election.update');


    // candidats
    Route::get('/candidat', [CandidatController::class, "index"])->name('candidat');
    Route::post('/candidat', [CandidatController::class, "store"])->name('candidat');
    Route::delete('/candidat/{candidat}', [CandidatController::class, "delete"])->name('candidat.supprimer');
    Route::get('/candidat/{candidat}', [CandidatController::class, "edit"])->name('candidat.edit');
    Route::put('/candidat/{candidat}', [CandidatController::class, "update"])->name('candidat.update');

    // electeurs
    Route::get('/electeur', [UtilisateurController::class, "index"])->name('electeur');
    Route::post('/electeur', [UtilisateurController::class, "store"])->name('electeur');
    Route::post('/electeuradd', [UtilisateurController::class, "storelecteur"])->name('ajoutelecteur');
    Route::delete('/electeur/{utilisateur}', [UtilisateurController::class, "delete"])->name('electeur.supprimer');
    Route::get('/electeur/{utilisateur}', [UtilisateurController::class, "edit"])->name('electeur.edit');
    Route::put('/electeur/{utilisateur}', [UtilisateurController::class, "update"])->name('electeur.update');

    // associations
    Route::get('/asso', [AssoController::class, "index"])->name('asso');
    Route::post('/asso', [AssoController::class, "store"])->name('asso');
    Route::delete('/asso/{asso}', [AssoController::class, "delete"])->name('asso.supprimer');
    Route::get('/asso/{asso}', [AssoController::class, "edit"])->name('asso.edit');
    Route::put('/asso/{asso}', [AssoController::class, "update"])->name('asso.update');

    // ajout d'un administrateur
    Route::get('/admin', [AdminController::class, "index"])->name('admin');
    Route::post('/admin', [AdminController::class, "store"])->name('admin');
    Route::delete('/admin/{admin}', [AdminController::class, "delete"])->name('admin.supprimer');
    Route::get('/admin/{admin}', [AdminController::class, "edit"])->name('admin.edit');
    Route::put('/admin/{admin}', [AdminController::class, "update"])->name('admin.update');

});



// vote
Route::get('/voter', [VoteController::class, "index"])->name('voter');
Route::post('/voter', [VoteController::class, "store"])->name('voter');
Route::delete('/voter/{voter}', [VoteController::class, "delete"])->name('voter.supprimer');
Route::get('/voter/{voter}', [VoteController::class, "edit"])->name('voter.edit');
Route::put('/voter/{voter}', [VoteController::class, "update"])->name('voter.update');
