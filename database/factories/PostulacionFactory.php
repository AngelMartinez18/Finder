<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Postulacion;
use App\Models\Oferta;
use App\Models\Candidato;

class PostulacionFactory extends Factory
{
    protected $model = Postulacion::class;

    public function definition()
    {
        return [
            'id_oferta' => Oferta::factory(),
            'id_candidato' => Candidato::factory(),
            'fecha_postulacion' => now(),
            'carta_presentacion' => $this->faker->realText(120),
            'cv_adj' => null,
            'estado' => $this->faker->randomElement([
                'enviada',
                'revision',
                'entrevista',
                'oferta',
                'declinada',
                'rechazada'
            ]),
        ];
    }
}
