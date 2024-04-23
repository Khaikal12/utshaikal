<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);  // Mendapatkan semua mahasiswa
Route::post('/mahasiswa', [MahasiswaController::class, 'store']);  // Menambahkan mahasiswa baru
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);  // Mendapatkan mahasiswa berdasarkan NIM
Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);  // Mengupdate mahasiswa
Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);  // Menghapus mahasiswa

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);  // Mendapatkan semua mahasiswa
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);  // Menambahkan mahasiswa baru
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);  // Mendapatkan mahasiswa berdasarkan NIM
    Route::put('/mahasiswa/{nim}', [MahasiswaController::class, 'update']);  // Mengupdate mahasiswa
    Route::delete('/mahasiswa/{nim}', [MahasiswaController::class, 'destroy']);  // Menghapus mahasiswa
});
