<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

route::get('/form', [MahasiswaController::class, 'form'])->name('form');
route::post('/simpan', [MahasiswaController::class, 'simpan']);
route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftar'])->name('daftar');