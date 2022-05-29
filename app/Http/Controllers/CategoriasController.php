<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;
use \App\Models\Categoria;

class CategoriasController extends Controller
{
    public function categoria(Request $request)
    {
        $libros = Libro::where('categoria', $request->nombre)->paginate(10);

        return view('librosDeCategoria', ['libros' => $libros]);
    }
}
