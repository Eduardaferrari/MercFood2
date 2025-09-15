<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaMesa extends Model
{
    protected $fillable = ['reserva_id', 'mesa'];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
