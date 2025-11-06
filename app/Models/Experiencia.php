<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencias';
    protected $primaryKey = 'id_experiencia';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_candidato',
        'cargo',
        'empresa',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
    ];

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'id_candidato');
    }
}
