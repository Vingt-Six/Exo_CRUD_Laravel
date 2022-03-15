<?php

use App\Http\Controllers\MembreController;
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

Route::get('/', [MembreController::class, 'index']);
Route::get('/create', [MembreController::class, 'create']);
Route::post('/store', [MembreController::class, 'store']);
Route::get('/show/{id}', [MembreController::class, 'show']);
Route::delete('/delete/{id}', [MembreController::class, 'destroy']);
Route::get('/membre/{id}/edit', [MembreController::class, 'edit']);
Route::put('/membre/{id}/update', [MembreController::class, 'update']);
Route::get('/deleteALL', [MembreController::class, 'destroyAll']);