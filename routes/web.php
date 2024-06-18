<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakananController;

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/explore', [MakananController::class, 'tampilan'])->name('user.tampilan');
Route::get('/detail/{id}', [MakananController::class, 'detail'])->name('detail.tampilan');

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
Route::controller(MakananController::class)->prefix('makanan')->group(function () {
    Route::get('halaman', 'index')->name('makanan.index');
    Route::get('tambah', 'tambah')->name('makanan.tambah');
    Route::post('tambah', 'simpan')->name('makanan.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('makanan.edit');
    Route::put('edit/{id}', 'update')->name('makanan.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('makanan.hapus');
});
