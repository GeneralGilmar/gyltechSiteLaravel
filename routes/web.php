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

use App\http\Controllers\gyltechController;

Route::get('/', [gyltechController::class, 'index']);
Route::get('/redes', [gyltechController::class, 'redes']);
Route::get('/programacao', [gyltechController::class, 'programacao']);
Route::get('/it', [gyltechController::class, 'it']);
Route::get('/bi', [gyltechController::class, 'bi']);
Route::get('/train', [gyltechController::class, 'train']);
Route::get('/design', [gyltechController::class, 'design']);
Route::get('/sobre', [gyltechController::class, 'sobre']);
