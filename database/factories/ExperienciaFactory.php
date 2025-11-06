<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Experiencia;
use App\Models\Candidato;

class ExperienciaFactory extends Factory
{
    protected $model = Experiencia::class;

    public function definition()
    {
        return [
            'id_candidato' => Candidato::factory(),
            'cargo' => $this->faker->jobTitle(),
            'empresa' => $this->faker->company(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => null,
            'descripcion' => $this->faker->realText(100),
        ];
    }
}
