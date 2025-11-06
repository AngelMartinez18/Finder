<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades';
    protected $primaryKey = 'id_habilidad';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre',
    ];

    public $timestamps = true;

    public function candidatos()
    {
        return $this->belongsToMany(
            Candidato::class,
            'candidato_habilidad',
            'id_habilidad',
            'id_candidato'
        )->withPivot('nivel')->withTimestamps();
    }

    public function ofertas()
    {
        return $this->belongsToMany(
            Oferta::class,
            'oferta_habilidad',
            'id_habilidad',
            'id_oferta'
        )->withPivot('importancia')->withTimestamps();
    }
}
