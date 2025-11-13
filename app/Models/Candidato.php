<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'candidatos';
    protected $primaryKey = 'id_candidato';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_usuario',
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'ubicacion',
        'telefono',
        'foto_perfil',
        'visibilidad_cv',
    ];

    public function getFotoPerfilUrlAttribute()
    {
        return $this->foto_perfil
            ? asset('storage/' . $this->foto_perfil)
            : asset('Imagenes/default-user.png'); // o Imagenes/default-user.png
    }


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function experiencias()
    {
        return $this->hasMany(Experiencia::class, 'id_candidato');
    }

    public function educaciones()
    {
        return $this->hasMany(Educacion::class, 'id_candidato');
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'candidato_habilidad', 'id_candidato', 'id_habilidad');
    }

    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class, 'id_candidato');
    }
}
