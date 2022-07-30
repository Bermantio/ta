<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatamustahikController;
use App\Http\Controllers\DatalazismuController;
use App\Http\Controllers\DatalaporanController;
use App\Http\Controllers\DatamuzakkiController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\DatatunaiController;
use App\Http\Controllers\DatanontunaiController;
use App\Http\Controllers\DataprogramController;
use App\Http\Controllers\DatapenyaluranController;

<<<<<<< HEAD
Route::resource('datamustahik', DatamustahikController::class);
Route::resource('datalazismu', DatalazismuController::class);
Route::resource('datalaporan', DatalaporanController::class);
Route::resource('datamuzakki', DatamuzakkiController::class);
Route::resource('datauser', DatauserController::class);
Route::resource('datatunai', DatatunaiController::class);
Route::resource('datanontunai', DatanontunaiController::class);
Route::resource('dataprogram', DataprogramController::class);
Route::resource('datapenyaluran', DatapenyaluranController::class);
Route::resource('datapenyaluran', DatapenyaluranController::class);


Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'index']);

//Route::get('/laporantunai.lap', [App\Http\Controllers\LaporantunaiController::class, 'index'])->name('lap');
Route::get('/print',[DatatunaiController::class, 'print']);

//Route::get('/cetakdata',[DatatunaiController::cetakdata, 'cetakdata']);
=======
Route::get('/',[HomeController::class, 'index']);
Route::group(['middleware' => 'CheckRole:admin'],function(){
    Route::get('/home',[HomeController::class, 'index']);
    Route::resource('datamustahik', DatamustahikController::class);
    Route::resource('datalazismu', DatalazismuController::class);
    Route::resource('datalaporan', DatalaporanController::class);
    Route::resource('datamuzakki', DatamuzakkiController::class);
    Route::resource('datauser', DatauserController::class);
    Route::resource('datatunai', DatatunaiController::class);
    Route::resource('datanontunai', DatanontunaiController::class);
    Route::resource('dataprogram', DataprogramController::class);
    Route::resource('datapenyaluran', DatapenyaluranController::class);
});

Route::group(['middleware' => 'CheckRole:admin,datauser'],function(){
    Route::get('/home',[HomeController::class, 'index']);
    Route::resource('datamustahik', DatamustahikController::class);
    Route::resource('datalazismu', DatalazismuController::class);
    Route::resource('datalaporan', DatalaporanController::class);
    Route::resource('datamuzakki', DatamuzakkiController::class);
    Route::resource('datatunai', DatatunaiController::class);
    Route::resource('datanontunai', DatanontunaiController::class);
    Route::resource('dataprogram', DataprogramController::class);
    Route::resource('datapenyaluran', DatapenyaluranController::class);
});
>>>>>>> ca342e308626e4b6af204364f7b8d3952efb17b5
Auth::routes();