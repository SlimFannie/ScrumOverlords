<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CampagnesController;
use App\Http\Controllers\PaniersController;
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\AccueilsController;

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
Route::get('produits',
[ProduitsController::class, 'index'])->name('produits.index');

// Route des campagnes
Route::get('campagnes',
[CampagnesController::class, 'index'])->name('campagnes.index');

// Route des paniers
Route::get('paniers',
[PaniersController::class, 'index'])->name('paniers.index');

// Route des usagers
Route::get('usagers',
[UsagersController::class, 'index'])->name('usagers.index');

// Route des profils
Route::get('profils',
[UsagersController::class, 'index'])->name('profils.index');

// Route page d'accueil (Possiblement la seule route pour la page d'accueil ?...À définir)
Route::get('/',
[AccueilsController::class, 'index'])->name('accueils.index');
