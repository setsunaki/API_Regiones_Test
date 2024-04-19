<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CalleController;

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

Route::prefix('v1')->group(function() {
    Route::get('/regiones',[RegionController::class, 'get']);
    Route::get('/provincias/{id}', [ProvinciaController::class, 'getByRegion']);
    Route::get('/ciudades/{id}', [CiudadController::class, 'getByProvincia']);
    Route::get('/calles/{id}', [CalleController::class, 'getByCiudad']);
});

