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

use App\http\Controllers\gyltech;

Route::get('/', [gyltech::class, 'index']);
Route::get('/redes', [gyltech::class, 'redes']);
Route::get('/programacao', [gyltech::class, 'programacao']);
Route::get('/it', [gyltech::class, 'it']);
Route::get('/bi', [gyltech::class, 'bi']);
Route::get('/train', [gyltech::class, 'train']);
Route::get('/design', [gyltech::class, 'design']);
Route::get('/sobre', [gyltech::class, 'sobre']);
