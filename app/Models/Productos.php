<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'pais_origen',
        'observaciones',
        'seccion'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];

}
