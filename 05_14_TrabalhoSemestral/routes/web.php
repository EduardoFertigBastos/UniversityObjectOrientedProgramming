<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StatesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\AddressesController;

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

Route::get('/', [DashboardController::class, 'index'])->name('index');

/**
 * STATES
 */

Route::get('/states',                    [StatesController::class, 'index']) ->name('states.index');
Route::get('/states/create',             [StatesController::class, 'create'])->name('states.create');
Route::get('/states/{state_id}/delete',  [StatesController::class, 'delete'])->name('states.delete');
Route::get('/states/{state_id}/edit',    [StatesController::class, 'edit'])  ->name('states.edit');
Route::get('/states/{state_id}/show',    [StatesController::class, 'show'])  ->name('states.show');
Route::post('/states',                   [StatesController::class, 'store']) ->name('states.store');
Route::post('/states/{state_id}/update', [StatesController::class, 'update'])->name('states.update');

/**
 * CITIES
 */

Route::get('/cities',                   [CitiesController::class, 'index']) ->name('cities.index');
Route::get('/cities/create',            [CitiesController::class, 'create'])->name('cities.create');
Route::get('/cities/{city_id}/delete',  [CitiesController::class, 'delete'])->name('cities.delete');
Route::get('/cities/{city_id}/edit',    [CitiesController::class, 'edit'])  ->name('cities.edit');
Route::get('/cities/{city_id}/show',    [CitiesController::class, 'show'])  ->name('cities.show');
Route::post('/cities',                  [CitiesController::class, 'store']) ->name('cities.store');
Route::post('/cities/{city_id}/update', [CitiesController::class, 'update'])->name('cities.update');

/**
 * ADDRESSES
 */

Route::get('/addresses',                      [AddressesController::class, 'index']) ->name('addresses.index');
Route::get('/addresses/create',               [AddressesController::class, 'create'])->name('addresses.create');
Route::get('/addresses/{address_id}/delete',  [AddressesController::class, 'delete'])->name('addresses.delete');
Route::get('/addresses/{address_id}/edit',    [AddressesController::class, 'edit'])  ->name('addresses.edit');
Route::get('/addresses/{address_id}/show',    [AddressesController::class, 'show'])  ->name('addresses.show');
Route::post('/addresses',                     [AddressesController::class, 'store']) ->name('addresses.store');
Route::post('/addresses/{address_id}/update', [AddressesController::class, 'update'])->name('addresses.update');

