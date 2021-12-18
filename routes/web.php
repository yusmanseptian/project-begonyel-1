<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/add', [App\Http\Controllers\UserController::class, 'create'])->name('users-add');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users-store');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users-edit');
Route::post('/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('users-update');
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('users-delete');

Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/add', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori-add');
Route::post('/kategori/store', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori-store');
Route::get('/kategori/edit/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori-edit');
Route::post('/kategori/update', [App\Http\Controllers\KategoriController::class, 'update'])->name('kategori-update');
Route::get('/kategori/delete/{id}', [App\Http\Controllers\KategoriController::class, 'delete'])->name('kategori-delete');

Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('produk');
Route::get('/produk/add', [App\Http\Controllers\ProdukController::class, 'create'])->name('produk-add');
Route::post('/produk/store', [App\Http\Controllers\ProdukController::class, 'store'])->name('produk-store');
Route::get('/produk/edit/{id}', [App\Http\Controllers\ProdukController::class, 'edit'])->name('produk-edit');
Route::post('/produk/update', [App\Http\Controllers\ProdukController::class, 'update'])->name('produk-update');
Route::get('/produk/delete/{id}', [App\Http\Controllers\ProdukController::class, 'delete'])->name('produk-delete');