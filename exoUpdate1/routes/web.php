<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index']);
Route::get('/create', [AnimalController::class, 'create']);
Route::post('/store', [AnimalController::class, 'store']);
Route::get('/show/{id}', [AnimalController::class, 'show']);
Route::get('/animals/{id}/edit', [AnimalController::class, 'edit']);
Route::put('/animals/{id}/update', [AnimalController::class, 'update']);
Route::delete('/delete/{id}', [AnimalController::class, 'destroy']);