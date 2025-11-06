<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    protected $primaryKey = 'id_empresa';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nombre_empresa',
        'descripcion',
        'sector',
        'ubicacion',
        'sitio_web',
        'logo',
        'estado',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELACIONES
    |--------------------------------------------------------------------------
    */

    public function empleadores()
    {
        return $this->hasMany(Empleador::class, 'id_empresa');
    }

    public function ofertas()
    {
        return $this->hasMany(Oferta::class, 'id_empresa');
    }
}

