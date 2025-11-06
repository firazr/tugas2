<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/', fn() => view('home'));

// existing
Route::get('/tentang', fn() => view('tentang'));
Route::get('/layanan', fn() => view('layanan'));
Route::get('/artikel', fn() => view('artikel'));
Route::get('/kontak', fn() => view('kontak'));

// aliases to match the links you clicked
Route::get('/tentang-kami', fn() => view('tentang'));
Route::get('/layanan-kami', fn() => view('layanan'));
Route::get('/hubungi-kami', fn() => view('kontak'));

Route::get('/layanan-kami', fn() => view('layanan'));
Route::get('/artikel', fn() => view('artikel'));
