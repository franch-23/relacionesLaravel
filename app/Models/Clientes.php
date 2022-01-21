<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class clientes extends Model
{
    use HasFactory , Notifiable , HasApiTokens;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'apellidos'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
    ];


    public function productos(){
        return $this->hasOne("App\productos");
    }
    public function producto(){
        return $this->hasMany("App\productos");
    }
}
