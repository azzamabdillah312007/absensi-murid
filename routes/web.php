<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/kelas-saya', function () {
    return view('kelas.index');
})->middleware(['auth', 'verified'])->name('kelas.index');

Route::get('/kelas-saya', [ClassController::class, 'index'])->name('kelas.index')->middleware('auth');
Route::get('/kelas-saya/tambah-kelas', [ClassController::class, 'showAddClass'])->name('kelas.tambah-kelas')->middleware('auth');
Route::post('/kelas-saya/tambah-kelas', [ClassController::class, 'create'])->name('kelas.create-kelas')->middleware('auth');



Route::get('/tentang', function () {
    return view('tentang.index');
})->middleware(['auth', 'verified'])->name('tentang.index');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
