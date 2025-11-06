<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Educacion extends Model
{
    use HasFactory;

    protected $table = 'educaciones';
    protected $primaryKey = 'id_educacion';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_candidato',
        'institucion',
        'titulo',
        'nivel',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
    ];

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'id_candidato');
    }
}
