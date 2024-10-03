<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verso extends Model
{
    protected $table = 'verso'; // La tabella associata a questo modello

    // Un verso appartiene a un canto
    public function canto()
    {
        return $this->belongsTo(Canto::class, 'id_canto'); // Relazione con il modello Canto
    }
}