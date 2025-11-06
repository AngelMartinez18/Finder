<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Candidato;
use App\Models\Usuario;

class CandidatoFactory extends Factory
{
    protected $model = Candidato::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuario::factory(),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'fecha_nacimiento' => $this->faker->date(),
            'ubicacion' => $this->faker->city(),
            'telefono' => $this->faker->phoneNumber(),
            'foto_perfil' => null,
            'visibilidad_cv' => $this->faker->randomElement(['publico', 'privado', 'solo_empresas']),
        ];
    }
}
