<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cantica;
use App\Models\Canto;

class CanticaController extends Controller
{
    // Restituisce tutte le cantiche
    public function index()
    {
        return response()->json(Cantica::all()); // Restituisce le cantiche in formato JSON
    }

    // Restituisce i canti di una cantica specifica
    public function getCanti($canticaId)
    {
        $cantica = Cantica::with('canti')->findOrFail($canticaId);
        return response()->json($cantica); // Restituisce i canti in formato JSON
    }

    // Restituisce i versi di un canto specifico
    public function getVersi($canticaId, $cantoId)
    {
        $canto = Canto::with('versi')
            ->where('id_cantica', $canticaId) // Utilizza la chiave esterna corretta
            ->findOrFail($cantoId);
        return response()->json($canto); // Restituisce i versi in formato JSON
    }
}
