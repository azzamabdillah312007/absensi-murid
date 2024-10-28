<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Models\Classroom;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// Route::get('/kelas-saya', function () {
//     return view('kelas.index');
// })->middleware(['auth', 'verified'])->name('kelas.index');

Route::get('/kelas-saya', [ClassController::class, 'index'])->name('kelas.index')->middleware('auth');
Route::get('/kelas-saya/tambah-kelas', [ClassController::class, 'showAddClass'])->name('kelas.tambah-kelas')->middleware('auth');
Route::post('/kelas-saya/tambah-kelas', [ClassController::class, 'create'])->name('kelas.create-kelas')->middleware('auth');
Route::get('/kelas-saya/detail-kelas/{id}' , [ClassController::class , 'showDetailClass'])->name('kelas.detail-kelas')->middleware('auth');
Route::get('/kelas-saya/detail-kelas/{id}/tambah-murid' , [ClassController::class , 'showAddStudent'])->name('kelas.tambah-murid')->middleware('auth');
Route::post('/kelas-saya/detail-kelas/{id}/tambah-murid' , [ClassController::class , 'addStudent'])->name('kelas.create-murid')->middleware('auth');

Route::get('/tentang', function () {
    return view('tentang.index');
})->middleware(['auth', 'verified'])->name('tentang.index');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
