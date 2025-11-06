<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'telefono',
        'tipo_usuario',
        'visibilidad_perfil',
        'terminos_aceptados',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'visibilidad_perfil' => 'boolean',
        'terminos_aceptados' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIONES
    |--------------------------------------------------------------------------
    */

    public function candidato()
    {
        return $this->hasOne(Candidato::class, 'id_usuario');
    }

    public function empleador()
    {
        return $this->hasOne(Empleador::class, 'id_usuario');
    }
}
