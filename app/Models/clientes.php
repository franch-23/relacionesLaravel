<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidos'
    ];

    public function productos(){
        return $this->hasOne("App\productos");
    }
    public function producto(){
        return $this->hasMany("App\productos");
    }
}
