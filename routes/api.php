<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get("/clientes/{id}/productos/",function ($id){
    return \App\Models\clientes::find($id)->producto->nombre;
});

Route::get("/producto/{id}",function ($id){
    $producto=\App\Models\clientes::find($id)->producto->where("pais_origen","España");
    foreach ($producto as $productos){
        echo $producto->nombre . "<br>";
    }
    /*Route::post('login',[\App\Http\Controllers\loginController::class, 'authenticate']);*/

});
Route::post('login',[\App\Http\Controllers\loginController::class, 'authenticate']);
Route::get('prueba',[\App\Http\Controllers\pruebaController::class,'prueba'])->middleware(islogendmiddleware::class);
