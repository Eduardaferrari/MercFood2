<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nome', 'telefone', 'data', 'hora', 'pessoas'
    ];

    public function mesas()
    {
        return $this->hasMany(ReservaMesa::class);
    }
}
