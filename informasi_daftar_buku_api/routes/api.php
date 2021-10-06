<?php

use App\Http\Controllers\InformasiBukuController;
use App\Http\Controllers\InformasiPenulisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/buku', [InformasiBukuController::class, 'index']);
// Route::post('/buku', [InformasiBukuController::class, 'store']);
// Route::get('/buku/{id}', [InformasiBukuController::class, 'show']);
// Route::put('/buku/{id}', [InformasiBukuController::class, 'update']);
// Route::delete('/buku/{id}', [InformasiBukuController::class, 'destroy']);

Route::resource('/buku', InformasiBukuController::class)->except(['create', 'edit']);

// Route::get('/penulis', [InformasiPenulisController::class, 'index']);
// Route::post('/penulis', [InformasiPenulisController::class, 'store']);
// Route::get('/penulis/{id}', [InformasiPenulisController::class, 'show']);
// Route::put('/penulis/{id}', [InformasiPenulisController::class, 'update']);
// Route::delete('/penulis/{id}', [InformasiPenulisController::class, 'destroy']);

Route::resource('/penulis', InformasiPenulisController::class)->except(['create', 'edit']);
