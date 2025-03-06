<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'sala_id', 'fecha'];

    // Relación con Cliente (Usuario)
    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id'); // Asegúrate de que el campo sea cliente_id
    }

    // Relación con Sala
    public function sala()
    {
        return $this->belongsTo(Sala::class, 'sala_id'); // Asegúrate de que el campo sea sala_id
    }
}
