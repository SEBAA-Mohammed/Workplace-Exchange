<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\OccupationController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::resource('cities', CityController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('establishments', EstablishmentController::class);
Route::resource('exchanges', ExchangeController::class);
Route::resource('regions', RegionController::class);
Route::resource('occupations', OccupationController::class);
