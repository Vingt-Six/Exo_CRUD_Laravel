<?php

use App\Http\Controllers\IngredientController;
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

Route::get('/', [IngredientController::class, 'index']);
Route::post('/store', [IngredientController::class, 'store']);
Route::get('/show/{id}', [IngredientController::class, 'show']);
Route::delete('/delete/{id}', [IngredientController::class, 'destroy']);