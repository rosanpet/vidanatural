<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NuevosPatrocinado extends Model
{
    use HasFactory;

    protected $fillable = ['apellido','nombre','dni', 'whatsapp-codigo-pais','numero-telefono','email', 'direccion','patrocinador','id-condicion-fiscal', 'id-provincia','id-localidad','codigo-postal',
    'cuit'];
    
}
