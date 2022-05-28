<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'correo', 'logo', 'pagina_web'
    ];

    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
}
