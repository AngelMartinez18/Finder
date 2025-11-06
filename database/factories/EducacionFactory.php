<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Educacion;
use App\Models\Candidato;

class EducacionFactory extends Factory
{
    protected $model = Educacion::class;

    public function definition()
    {
        return [
            'id_candidato' => Candidato::factory(),
            'institucion' => $this->faker->company(),
            'titulo' => $this->faker->jobTitle(),
            'nivel' => $this->faker->randomElement([
                'secundaria',
                'tecnico',
                'universidad',
                'pregrado',
                'posgrado',
                'doctorado'
            ]),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
