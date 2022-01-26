<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']); #->name('home');
Route::get('/get_vehicles', [App\Http\Controllers\VehicleController::class, 'getVehicle']);
Route::get('/vehicle', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle');
Route::post('/vehicle', [App\Http\Controllers\VehicleController::class, 'store'])->name('store_vehicle');