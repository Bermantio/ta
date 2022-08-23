<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NontunaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ApiDataPenyaluranController;
use App\Http\Controllers\Api\ApiDataNontunaiController;
use App\Http\Controllers\Api\ApiDataProfilController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class,'login']);

Route::group(['middleware' => 'auth:sanctum'],function(){
    Route::apiResource('/datapenyaluran', App\Http\Controllers\Api\ApiDataPenyaluranController::class);
    Route::apiResource('/post', App\Http\Controllers\Api\ApiDataPenyaluranController::class);
    Route::post('/datapenyaluran/{id}',[ApiDataPenyaluranController::class,'update']);
    //Route::post('/datapenyaluran/{id}',[ApiDataPenyaluranController::class,'update']);
    Route::apiResource('/delete', App\Http\Controllers\Api\ApiDataPenyaluranController::class);
    
    Route::apiResource('/datanontunai', App\Http\Controllers\Api\ApiDataNontunaiController::class);
    Route::apiResource('/post', App\Http\Controllers\Api\ApiDataNontunaiController::class);
    Route::post('/datanontunai/{id}',[ApiDataNontunaiController::class,'update']);
    Route::post('/post/{id}',[ApiDataNontunaiController::class,'show']);
    Route::apiResource('/delete', App\Http\Controllers\Api\ApiDataNontunaiController::class);

    Route::apiResource('/profil', App\Http\Controllers\Api\ApiDataProfilController::class);
    Route::apiResource('/post', App\Http\Controllers\Api\ApiDataProfilController::class);
    Route::post('/profil/{id}',[ApiDataProfilController::class,'update']);
    Route::post('/post/{id}',[ApiDataProfilController::class,'show']);
    Route::apiResource('/delete', App\Http\Controllers\Api\ApiDataProfilController::class);
    
});


//Route::post('/datapenyaluran/{id}',[ApiDatapenyaluranController::class,'update']);
//Route::delete('/datapenyaluran/{id}',[ApiDatapenyaluranController::class,'destroy']);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::post('login', [AuthController::class,'login']);

//Route::group(['middleware' => 'auth:sanctum', 'CheckRole:Admin', 'prevent-back-history'],function(){
//    Route::get('/home',[HomeController::class, 'index']);
//    Route::resource('profil', ProfilController::class);
//    Route::resource('datamustahik', DatamustahikController::class);
//    Route::resource('datalazismu', DatalazismuController::class);
//    Route::resource('datamuzakki', DatamuzakkiController::class);
 //   Route::resource('datauser', DatauserController::class);
//    Route::resource('datatunai', DatatunaiController::class);
//    Route::resource('datanontunai', DatanontunaiController::class);
//    Route::resource('dataprogram', DataprogramController::class);
//    Route::resource('datapenyaluran', DatapenyaluranController::class);
    //Route::post('nontunai}',[NontunaiController::class,'store']);
 //   Route::post('/datapenyaluran/{id}',[DatapenyaluranController::class,'update']);
 //   Route::delete('/datapenyaluran/{id}',[DatapenyaluranController::class,'destroy']);
//});

Route::resource('nontunai', NontunaiController::class);
Route::post('nontunai}',[NontunaiController::class,'store']);
Route::post('/nontunai/{id}',[NontunaiController::class,'update']);
Route::delete('/nontunai/{id}',[NontunaiController::class,'destroy']);

//Route::resource('datapenyaluran', DatapenyaluranController::class);
//Route::post('nontunai}',[NontunaiController::class,'store']);
//Route::post('/datapenyaluran/{id}',[DatapenyaluranController::class,'update']);
//Route::delete('/datapenyaluran/{id}',[DatapenyaluranController::class,'destroy']);

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('nontunai',[NontunaiController::class, 'index']);
//Route::post('nontunai','NontunaiController@create');
//Route::put('/nontunai/{id}','NontunaiController@update');
//Route::delete('/nontunai/{id}','NontunaiController@delete');
