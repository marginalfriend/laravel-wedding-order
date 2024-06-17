<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingPackageController;
use App\Http\Controllers\CustomerController;

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


// Customers - VIEW
Route::get('/customers', [CustomerController::class, 'index']) -> name('customers.index');

// Customers - CREATE
Route::get('/customers/create', [CustomerController::class, 'create']) -> name('customers.create');
Route::post('/customers', [CustomerController::class, 'store']) -> name('customers.store');

// Customers - UPDATE
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']) -> name('customers.edit');
Route::put('/customers/{customer}/update', [CustomerController::class, 'update']) -> name('customers.update');


// Customers - DELETE
Route::delete('customers/{customer}/destroy', [CustomerController::class, 'destroy']) -> name('customers.destroy');





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