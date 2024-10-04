<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CanticaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Importa il controller

// Restituisce tutte le cantiche
Route::get('/cantiche', [CanticaController::class, 'index']);

// Restituisce i canti di una cantica
Route::get('/cantica/{canticaId}/canti', [CanticaController::class, 'getCanti']);

// Restituisce i versi di un canto
Route::get('/cantica/{canticaId}/canto/{cantoId}/versi', [CanticaController::class, 'getVersi']);