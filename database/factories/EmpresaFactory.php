<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresa;

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition()
    {
        return [
            'nombre_empresa' => $this->faker->company(),
            'descripcion' => $this->faker->realText(100),
            'sector' => $this->faker->randomElement(['Tecnología', 'Salud', 'Comercio', 'Educación']),
            'ubicacion' => $this->faker->city(),
            'sitio_web' => $this->faker->url(),
            'logo' => null,
            'estado' => 'activa',
        ];
    }
}

