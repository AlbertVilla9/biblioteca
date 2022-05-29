<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Libro;
use \App\Models\User;
use \App\Models\Reservas;
use Illuminate\Support\Facades\DB;


class ReservasController extends Controller
{
    public function reservar(Request $request)
    {
        Reservas::create([
            'id_libro' => $request->libro,
            'id_usuario' => $request->usuario,
        ]);

        return redirect('dashboard');
    }

    public function enseñar(Request $request)
    {
        $reserva = Libro::select(['id' => Reservas::select('id_libro')
            ->where('id_usuario', $request->usuario)
    ])->get();
        return view('reservas')->with('reservas', $reserva);
    }
}
