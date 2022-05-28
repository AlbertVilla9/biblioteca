<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;

class CrearLibroController extends Controller
{
    public function crear(Request $request)
    {
        $libro = Libro::create([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'autor' => $request->autor,
            'editorial' => $request->editorial,
            'imagen' => $request->imagen,
        ]);

        $aviso = "El libro ha sido añadido";

        return redirect('dashboard')->with('aviso', $aviso);
    }
}
