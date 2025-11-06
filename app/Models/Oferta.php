<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $table = 'ofertas';
    protected $primaryKey = 'id_oferta';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_empresa',
        'titulo',
        'descripcion',
        'requisitos',
        'ubicacion',
        'tipo_contrato',
        'salario',
        'fecha_publicacion',
        'fecha_cierre',
        'estado',
    ];


    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa');
    }

    public function postulaciones()
    {
        return $this->hasMany(Postulacion::class, 'id_oferta');
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'oferta_habilidad', 'id_oferta', 'id_habilidad');
    }
}
