<?php

namespace Database\Factories;

use App\Models\Empleador;
use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadorFactory extends Factory
{
    protected $model = Empleador::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory()->create([
                'tipo_usuario' => 'empresario'
            ])->id_usuario,

            'id_empresa' => Empresa::factory(),

            'rol_empresa' => $this->faker->randomElement(['Dueño', 'RRHH', 'Reclutador']),
        ];
    }
}


