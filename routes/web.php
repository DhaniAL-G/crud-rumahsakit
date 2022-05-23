<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rumahsakitController;

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
    return view('welcome');
});



//rumahsakit
Route::get('rumahsakit',[rumahsakitController::class,'index']);
Route::get('/rumahsakit/create',[rumahsakitController::class,'add']) ;
Route::post('/rumahsakit/store',[rumahsakitController::class,'store']) ;
Route::get('rumahsakit/{idpasien}/edit', [rumahsakitController::class,'edit']);
Route::post('rumahsakit/{idpasien}/update', [rumahsakitController::class,'update']);
Route::get('rumahsakit/{idpasien}/delete',[rumahsakitController::class,'delete']);