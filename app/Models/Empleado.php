<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'primer_nombre', 'apellido', 'compania_id', 'correo','telefono',
    ];

    public function Companies()
    {
        return $this->belongsTo(Compania::class, 'compania_id');
    }
}
