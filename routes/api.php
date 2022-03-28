<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Pega todos registros da tabela
Route::get('/products', [ProductController::class, 'index']);

//Pega registro pelo ID
Route::get('/products/{id}', [ProductController::class, 'show']);

//Faz novos registros
Route::post('/products', [ProductController::class, 'store']);

//Atualiza registros
Route::put('/products/{id}', [ProductController::class, 'update']);

//Deleta registros
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
