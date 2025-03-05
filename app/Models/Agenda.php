<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    // Relación con Reuniones (Una agenda puede tener muchas reuniones)
    public function reuniones()
    {
        return $this->hasMany(Reunion::class, 'agendas_id');
    }
}
