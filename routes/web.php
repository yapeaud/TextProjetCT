<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/etudiant', [EtudiantController::class, "index"])->name('etudiant');
Route::get('/inscription', [EtudiantController::class, "inscription"])->name('inscription');
Route::post('/inscription', [EtudiantController::class, "traitementInscription"])->name('traitementInscription');
Route::get('/etudiant/liste', [EtudiantController::class, "listeEtudiant"])->name('listeEtudiant');





