<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'password' => Hash::make('password'),
            'telefono' => $this->faker->phoneNumber(),
            'tipo_usuario' => $this->faker->randomElement(['empresario', 'candidato']),
            'visibilidad_perfil' => $this->faker->boolean(),
            'terminos_aceptados' => true,
            'email_verified_at' => now(),
        ];
    }
}
