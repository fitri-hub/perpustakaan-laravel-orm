<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/tambah-buku', [BukuController::class, 'create']);

Route::post('/simpan-buku', [BukuController::class, 'store']);

Route::get('/edit-buku/{id}', [BukuController::class, 'edit']);

Route::post('/update-buku/{id}', [BukuController::class, 'update']);

Route::get('/hapus-buku/{id}', [BukuController::class, 'destroy']);