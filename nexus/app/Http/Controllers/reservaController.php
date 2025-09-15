<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\ReservaMesa;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function reserva()
    {
        // mesas já reservadas no banco
        $ocupadas = ReservaMesa::pluck('mesa')->toArray();
        return view('reserva', compact('ocupadas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'data' => 'required|date',
            'hora' => 'required',
            'pessoas' => 'required|integer|min:1',
            'mesas' => 'required|array|min:1',
            'mesas.*' => 'integer'
        ]);

        $reserva = Reserva::create($validated);

        foreach ($validated['mesas'] as $mesa) {
            ReservaMesa::create([
                'reserva_id' => $reserva->id,
                'mesa' => $mesa
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Mesas reservadas com sucesso!']);
    }
}
