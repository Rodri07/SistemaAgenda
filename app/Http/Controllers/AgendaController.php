<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    // Metodo para mostrar todas las agendas registradas
    public function ShowAgendas() {
        $agendas = agenda::all();
        return Response()->json($agendas);
    }

}
