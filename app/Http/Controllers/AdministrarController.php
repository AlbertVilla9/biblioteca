<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;
use Illuminate\Support\Facades\DB;


class AdministrarController extends Controller
{
    public function modificar(Request $request)
    {
        $libro = Libro::find($request->id);
        
        $libro->nombre = $request->nombre;
        $libro->categoria = $request->categoria;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->imagen = $request->imagen;

        $libro->save();

        return redirect('dashboard');
    }

    public function eliminar(Request $request)
    {
        $libro = Libro::find($request->id);
 
        $libro->delete();

        return redirect('dashboard');

    }
}
