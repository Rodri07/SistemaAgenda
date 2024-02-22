<?php

namespace App\Http\Controllers;

use App\Models\evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    // metodo para mostar todos los eventos
    public function ShowEventos()
    {
        $eventos = evento::all();
        return Response()->json($eventos);
    }

    // Metodo para registrar un evento
    public function RegisterEvento(Request $request)
    {
        $DataTableEvents = $request->all();

        $eventos = new evento();
        $eventos->nombre = $DataTableEvents['nombre'];
        $eventos->apellido = $DataTableEvents['descripcion'];
        $eventos->identificacion_carnet = $DataTableEvents['fecha'];
        $eventos->nombre = $DataTableEvents['lugar'];
        $eventos->nombre = $DataTableEvents['participante'];
        $eventos->save();

        return response()->json(['menssage' => 'Registro Exitoso']);
    }

    // Metodo para eliminar un evento a traves de un id
    public function EliminarEvento($id){
        $eventos = evento::find($id);
        if (!$eventos) {
            return response()->json(['message' => 'El evento no fue encontrado'], 404);
        }
        $eventos->delete();

        return response()->json(['message' => 'El evento fue eliminado correctamente'], 200);
    }

    // 4. Metodo para Buscar un evento con el nombre
    public function BuscadorEvento(Request $request)
    {
        $nombre = $request->input('nombre');

        if($nombre)
        {
            $eventosEncontrada = evento::where('nombre','like', '%' . $nombre . '%')->get();

            if($eventosEncontrada->isEmpty())
            {
                return response()->json(['mensage' => 'No se encontro el evento']);
            }
            return response()->json(['publicacions' => $eventosEncontrada]);
        }
        return response()->json(['menssage' => 'Se requiere el nombre del evento para buscarlo']);
    }

}
