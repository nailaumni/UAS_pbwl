<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::Get('/guru/create', [App\Http\Controllers\GuruController::class, 'create']);
Route::post('/guru', [App\Http\Controllers\GuruController::class, 'store']);
Route::get('/guru/edit/{id}', [App\Http\Controllers\GuruController::class, 'edit']);
Route::patch('/guru/{id}', [App\Http\Controllers\GuruController::class, 'update']);
Route::delete('/guru/{id}', [App\Http\Controllers\GuruController::class, 'destroy']);

Route::get('/mapel', [App\Http\Controllers\MapelController::class, 'index']);
Route::Get('/mapel/create', [App\Http\Controllers\MapelController::class, 'create']);
Route::post('/mapel', [App\Http\Controllers\MapelController::class, 'store']);
Route::get('/mapel/edit/{id}', [App\Http\Controllers\MapelController::class, 'edit']);
Route::patch('/mapel/{id}', [App\Http\Controllers\MapelController::class, 'update']);
Route::delete('/mapel/{id}', [App\Http\Controllers\MapelController::class, 'destroy']);

Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
Route::Get('/kelas/create', [App\Http\Controllers\KelasController::class, 'create']);
Route::post('/kelas', [App\Http\Controllers\KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [App\Http\Controllers\KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'update']);
Route::delete('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'destroy']);


Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
