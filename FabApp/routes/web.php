<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CampagnesController;
use App\Http\Controllers\PaniersController;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\AccueilsController;
use App\Http\Controllers\ProfilsController;

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

Route::get('accueil', function () {
    return view('index');
});

// Route des produits

Route::get('/produits/creation',
[DetailsController::class, 'create'])->name('produits.create');

Route::post('produits',
[DetailsController::class, 'store'])->name('produits.store');

Route::GET('/produits/modifier',
[DetailsController::class, 'edit'])->name('produits.edit');

Route::post('/produits/supprimer/',
[DetailsController::class, 'supprimer'])->name('produits.supprimer');

Route::get('produits',
[DetailsController::class, 'index'])->name('produits.index');


// Route des campagnes
Route::get('campagnes',
[CampagnesController::class, 'index'])->name('campagnes.index');

// Route des paniers
Route::get('paniers',
[PaniersController::class, 'index'])->name('paniers.index');

// Route des usagers

Route::POST('/usagers/login',
[UsagersController::class, 'login'])->name('usagers.login');

Route::get('/usagers/login',
[UsagersController::class, 'showLoginForm'])->name('usagers.showLoginForm');

Route::get('/usagers',
[UsagersController::class, 'index'])->name('usagers.index');

Route::get('/usagers/creation',
[UsagersController::class, 'create'])->name('usagers.create');

Route::post('/usagers',
[UsagersController::class, 'store'])->name('usagers.store');

Route::post('/usagers/deco',
[UsagersController::class, 'logout'])->name('usagers.logout');

/* Route des profils */
Route::get('/usager',
[ProfilsController::class, 'index'])->name('profils.index');

Route::get('/modifier',
[ProfilsController::class, 'edit'])->name('profils.edit');

Route::get('/update',
[ProfilsController::class, 'edit'])->name('profils.update');

// Route page d'accueil (Possiblement la seule route pour la page d'accueil ?...À définir)
Route::get('/',
[AccueilsController::class, 'index'])->name('accueils.index');


