<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/add', [HomeController::class, 'tambah']);


Route::post('/save', [HomeController::class, 'simpan']);



Route::get('/makanan', [HomeController::class, 'view_makanan']);



Route::get('/test_query_builder', [HomeController::class, 'test_query_builder']);
Route::get('/test_eloquent', [HomeController::class, 'test_eloquent']);
