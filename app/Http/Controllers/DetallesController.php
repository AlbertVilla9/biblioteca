<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;
use \App\Models\Categoria;

class DetallesController extends Controller
{
    public function detalles(Request $request)
    {
        $libro = Libro::where('id', $request->id)->first();

        return view('detalles', ['libros' => $libro]);
    }

    public function detallesAD(Request $request)
    {
        $libro = Libro::where('id', $request->id)->first();

        return view('detallesAD', [
            'categorias' => Categoria::paginate(10),
            'libros' => $libro
        ]);
    }
}
