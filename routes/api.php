<?php

use App\Http\Controllers\PedidoController;
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

Route::middleware('auth:sanctum')->get('/auth/usuario', function (Request $request) {
    return $request->user();
});

Route::prefix('pedidos')->group(function() {
    Route::get('', [PedidoController::class, 'index']);
    Route::post('', [PedidoController::class, 'store']);
    Route::get('{tipo}/{numero}', [PedidoController::class, 'show']);
    Route::patch('{tipo}/{numero}', [PedidoController::class, 'update']);
    Route::delete('{tipo}/{numero}', [PedidoController::class, 'destroy']);
});
