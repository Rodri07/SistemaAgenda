<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // metodo para mostar todos los usuarios registrados
    public function ShowUsuarios()
    {
        $usuarios = usuario::all();
        return Response()->json($usuarios);
    }

}
