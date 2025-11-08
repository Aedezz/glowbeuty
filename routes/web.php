<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/glowbeuty', function () {
    return view('main_ds');
});

Route::get('/detail', function () {
  return view('detail.detail');
});

Route::get('/kontak', function () {
  return view('kontak.kontak');
});

Route::get('/blog', function () {
  return view('blogs.blog');
});

Route::get('/tentang', function () {
  return view('tentang-kami.about-us');
});

Route::get('/produk', function () {
  return view('produk.produk');
});