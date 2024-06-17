<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingPackageController;

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


// Wedding Packages - VIEW
Route::get('/packages', [WeddingPackageController::class, 'index']) -> name('packages.index');

// Wedding Packages - CREATE
Route::get('/packages/create', [WeddingPackageController::class, 'create']) -> name('packages.create');
Route::post('/packages', [WeddingPackageController::class, 'store']) -> name('packages.store');

// Wedding Packages - UPDATE
Route::get('/packages/{package}/edit', [WeddingPackageController::class, 'edit']) -> name('packages.edit');
Route::put('/packages/{package}/update', [WeddingPackageController::class, 'update']) -> name('packages.update');


// Wedding Packages - DELETE
Route::delete('packages/{package}/destroy', [WeddingPackageController::class, 'destroy']) -> name('packages.destroy');