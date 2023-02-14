<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomplainController;
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

Route::get('/', [HomeController::class, 'index' ]);
Route::get('/komplains', [KomplainController::class, 'index']);
Route::get('/komplains/rekap', [KomplainController::class, 'rekap']);
Route::get('/komplains/create', [KomplainController::class, 'create']);
Route::get('/komplains/{id}', [KomplainController::class, 'show']);
Route::post('/komplains', [KomplainController::class, 'store']);
Route::get('/komplains/valid/{id}', [KomplainController::class, 'valid']);
Route::post('/komplains/store_valid', [KomplainController::class, 'store_valid']);
Route::get('/komplains/{id}/edit', [KomplainController::class, 'edit']);
Route::patch('/komplains/{id}', [KomplainController::class, 'update']);
Route::delete('/komplains/{id}', [KomplainController::class, 'destroy']);


