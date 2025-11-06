<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postulacion extends Model
{
    use HasFactory;

    protected $table = 'postulaciones';
    protected $primaryKey = 'id_postulacion';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_oferta',
        'id_candidato',
        'fecha_postulacion',
        'carta_presentacion',
        'cv_adj',
        'estado',
    ];


    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'id_candidato');
    }
}
