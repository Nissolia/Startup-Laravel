<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    // Relación con Reuniones (Una sala puede tener muchas reuniones)
    public function reuniones()
    {
        return $this->hasMany(Reunion::class, 'salas_id');
    }
}
