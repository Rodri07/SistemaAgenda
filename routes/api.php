<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\UsuarioController;
use App\Models\evento;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//CRUD
// Usuario
Route::get('/Usuarios', [UsuarioController::class, 'ShowUsuarios']);

// Agenda
Route::get('/Agendas', [agendaController::class, 'ShowAgendas']);

// Evento
Route::get('/Eventos', [EventoController::class, 'ShowEventos']);
Route::post('/EventoRegistrar', [EventoController::class, 'RegisterEvento']);
Route::delete('/EliminarEvento/{id}',[EventoController::class, 'EliminarEvento']);
Route::post('/BuscarPorNombre', [EventoController::class , 'BuscadorEvento']);

