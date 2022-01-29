<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsLogedMiddleware;

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

Route::get("/articulos/{id}", function ($id){
   $articulos = \App\Models\Cliente::find($id)->articulos->where("pais_origen", "ESPAÑA");
   foreach ($articulos as $articulo){
       echo $articulo->Nombre_Articulo . "<br>";
   }
});

//Route::middleware("IslogedMiddleware");
Route::get('user', [PruebaController::class, 'user'])->middleware(IsLogedMiddleware::class);
Route::post('login', [LoginController::class, 'authenticate']);

//->middleware(IsLogedMiddleware::class)
