<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return redirect()->route('lapor.index');
});

Route::get('/lapor', [LaporBanjirController::class, 'index'])->name('lapor.index');
Route::get('/lapor/buat', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor/konfirmasi', [LaporBanjirController::class, 'store'])->name('lapor.store');
