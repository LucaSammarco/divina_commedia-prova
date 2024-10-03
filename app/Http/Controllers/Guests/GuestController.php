<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Cantica;
use App\Models\Canto; // Importa il modello Canto

class GuestController extends Controller
{
    // Mostra la home page con le cantiche
    public function index()
    {
        $cantiche = Cantica::all(); // Recupera tutte le cantiche
        return view('guest.index', compact('cantiche')); // Passa le cantiche alla vista
    }

    // Mostra i canti di una cantica
    public function showCantica($canticaId)
    {
        // Recupera la cantica con i suoi canti
        $cantica = Cantica::with('canti')->findOrFail($canticaId); // Usa 'canti' come definito nel modello
        return view('guest.cantica', compact('cantica')); // Passa la cantica e i suoi canti alla vista
    }

    // Mostra i versi di un canto
    public function showCanto($canticaId, $cantoId)
    {
        // Utilizza 'id_cantica' invece di 'cantica_id' per collegare i canti alla cantica
        $canto = Canto::with('versi')
            ->where('id_cantica', $canticaId) // Filtra per id_cantica
            ->findOrFail($cantoId); // Recupera il canto specifico
        return view('guest.canto', compact('canto')); // Passa il canto e i versi alla vista
    }

}