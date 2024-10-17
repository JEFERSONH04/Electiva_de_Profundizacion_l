<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    protected $fillable = [
        '_token',
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'email',
        'ciudad'
    ];

    protected $table = 'empresas';
    
    

    
}
