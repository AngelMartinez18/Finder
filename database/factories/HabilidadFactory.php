<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Habilidad;

class HabilidadFactory extends Factory
{
    protected $model = Habilidad::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->jobTitle(),
        ];
    }
}
