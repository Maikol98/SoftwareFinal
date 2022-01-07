<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TiendaController;
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


Route::apiResource('Cliente', ClienteController::class);
Route::get('pdf/{id}',[OrdenController::class,'pdf']);
Route::get('Producto',[ProductoController::class,'index']);
Route::get('Orden/{id}',[OrdenController::class,'index']);
Route::get('Orden/{id}/Detalle',[OrdenController::class,'detalle']);
Route::get('Tienda',[TiendaController::class,'index']);