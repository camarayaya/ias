<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conducteur_vehicule;
use App\Http\Controllers\ConducteurController;
use App\Http\Controllers\VehiculeController;
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

Route::get('/', function () {
    return view('index');
});

 
Route::resource('conducteur_vehicules',Conducteur_vehicule::class);
Route::resource('conducteurs',ConducteurController::class);
Route::resource('vehicules',VehiculeController::class);