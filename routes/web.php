<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaanController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('penyewaan')->group(function () {
    Route::get('/', [PenyewaanController::class, 'index'])->name('penyewaan.index');
    Route::get('/create', [PenyewaanController::class, 'create'])->name('penyewaan.create');
    Route::post('/', [PenyewaanController::class, 'store'])->name('penyewaan.store');
    Route::get('/{penyewaan}/edit', [PenyewaanController::class, 'edit'])->name('penyewaan.edit');
    Route::put('/{penyewaan}', [PenyewaanController::class, 'update'])->name('penyewaan.update');
    Route::delete('/{penyewaan}', [PenyewaanController::class, 'destroy'])->name('penyewaan.destroy');

    // Trash routes
    Route::get('/trash', [PenyewaanController::class, 'trash'])->name('penyewaan.trash');
    Route::get('/restore/{id}', [PenyewaanController::class, 'restore'])->name('penyewaan.restore');
});
