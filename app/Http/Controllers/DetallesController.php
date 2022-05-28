<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;

class DetallesController extends Controller
{
    public function detalles(Request $request)
    {
        $libro = Libro::where('id', $request->id)->first();

        return view('detalles', ['libros' => $libro]);
    }
}
