<?php

use App\Http\Controllers\KategoriController;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kategori', [KategoriController::class, 'get']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'show']);

Route::post('/kategori', [KategoriController::class, 'post']);

Route::put('/kategori/{kategori}', [KategoriController::class, 'put']);

Route::delete('/kategori/{kategori}', [KategoriController::class, 'delete']);
