<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Oferta;
use App\Models\Empresa;

class OfertaFactory extends Factory
{
    protected $model = Oferta::class;

    public function definition()
    {
        return [
            'id_empresa' => Empresa::factory(),
            'titulo' => $this->faker->jobTitle(),
            'descripcion' => $this->faker->realText(150),
            'requisitos' => $this->faker->realText(80),
            'ubicacion' => $this->faker->city(),
            'tipo_contrato' => $this->faker->randomElement([
                'full_time',
                'part_time',
                'freelance',
                'temporal'
            ]),
            'salario' => rand(400, 3000),
            'fecha_publicacion' => now(),
            'fecha_cierre' => null,
            'estado' => $this->faker->randomElement(['activa', 'cerrada', 'pausada']),
        ];
    }
}
