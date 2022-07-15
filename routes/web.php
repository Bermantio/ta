<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DatamustahikController;
use App\Http\Controllers\DatalazismuController;
use App\Http\Controllers\DatalaporanController;
use App\Http\Controllers\DatamuzakkiController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DatatunaiController;
use App\Http\Controllers\DatanontunaiController;

Route::resource('datamustahik', DatamustahikController::class);
Route::resource('datalazismu', DatalazismuController::class);
Route::resource('datalaporan', DatalaporanController::class);
Route::resource('datamuzakki', DatamuzakkiController::class);
Route::resource('datauser', DatauserController::class);
Route::resource('datatunai', DatatunaiController::class);
Route::resource('datanontunai', DatanontunaiController::class);

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);

Route::get('/sewa',[SewaController::class, 'index'])->name('sewa');
Route::get('/sewa/detail/{id}', [SewaController::class, 'detail']);
Route::get('/sewa/add',[SewaController::class, 'add']);
Route::post('/sewa/insert',[SewaController::class, 'insert']);
Route::get('/sewa/edit/{id}',[SewaController::class, 'edit']);
Route::post('/sewa/edit/update/{id}',[SewaController::class, 'update']);
Route::get('/sewa/delete/{id}',[SewaController::class, 'delete']);

Route::get('/karyawan',[KaryawanController::class, 'index'])->name('karyawan');
Route::get('/karyawan/detail/{id}', [KaryawanController::class, 'detail']);
Route::get('/karyawan/add',[KaryawanController::class, 'add']);
Route::post('/karyawan/insert',[KaryawanController::class, 'insert']);
Route::get('/karyawan/edit/{id}',[KaryawanController::class, 'edit']);
Route::post('/karyawan/edit/update/{id}',[KaryawanController::class, 'update']);
Route::get('/karyawan/delete/{id}',[KaryawanController::class, 'delete']);

Route::get('/kategori',[KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/detail/{id}', [KategoriController::class, 'detail']);
Route::get('/kategori/add',[KategoriController::class, 'add']);
Route::post('/kategori/insert',[KategoriController::class, 'insert']);
Route::get('/kategori/edit/{id}',[KategoriController::class, 'edit']);
Route::post('/kategori/edit/update/{id}',[KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete']);

Route::get('/luaran',[PengeluaranController::class, 'index'])->name('luaran');
Route::get('/luaran/detail/{id}', [PengeluaranController::class, 'detail']);
Route::get('/luaran/add',[PengeluaranController::class, 'add']);
Route::post('/luaran/insert',[PengeluaranController::class, 'insert']);
Route::get('/luaran/edit/{id}',[PengeluaranController::class, 'edit']);
Route::post('/luaran/edit/update/{id}',[PengeluaranController::class, 'update']);
Route::get('/luaran/delete/{id}',[PengeluaranController::class, 'delete']);
Auth::routes();