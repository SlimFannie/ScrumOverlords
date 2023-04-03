<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CampagnesController;

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
    return view('index');
});

// Route des produits
Route::get('produits',
[ProduitsController::class, 'index'])->name('produits.index');

// Route des campagnes
Route::get('campagnes',
[CampagnesController::class, 'index'])->name('campagnes.index');
