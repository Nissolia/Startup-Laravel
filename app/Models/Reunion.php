<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    // Relación con Agenda (Una reunión pertenece a una agenda)
    public function agenda()
    {
        return $this->belongsTo(Agenda::class, 'agendas_id');
    }

    // Relación con Sala (Una reunión pertenece a una sala)
    public function sala()
    {
        return $this->belongsTo(Sala::class, 'salas_id');
    }
}
