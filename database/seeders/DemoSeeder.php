<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{
    Usuario,
    Candidato,
    Empresa,
    Empleador,
    Oferta,
    Postulacion,
    Habilidad,
    Experiencia,
    Educacion
};

class DemoSeeder extends Seeder
{
    public function run()
    {
        // Crear habilidades globales
        $habilidades = Habilidad::factory(20)->create();

        // Crear empresas + empleadores + ofertas
        Empresa::factory(5)->create()->each(function ($empresa) {

            // Crear usuario empresario
            $usuario = Usuario::factory()->create([
                'tipo_usuario' => 'empresario'
            ]);

            // Crear empleador
            Empleador::factory()->create([
                'id_usuario' => $usuario->id_usuario,
                'id_empresa' => $empresa->id_empresa
            ]);

            // Crear ofertas
            Oferta::factory(3)->create([
                'id_empresa' => $empresa->id_empresa
            ]);
        });

        // Obtener todas las ofertas
        $ofertas = Oferta::all();

        // Crear candidatos + relaciones
        Candidato::factory(10)->create()->each(function ($cand) use ($ofertas, $habilidades) {

            // Experiencias
            Experiencia::factory(3)->create([
                'id_candidato' => $cand->id_candidato
            ]);

            // Educación
            Educacion::factory(2)->create([
                'id_candidato' => $cand->id_candidato
            ]);

            // Asignar habilidades random
            $cand->habilidades()->attach(
                $habilidades->random(rand(3,7))->pluck('id_habilidad')->toArray(),
                ['nivel' => rand(1,5)]
            );

            // Postulaciones random
            Postulacion::factory(3)->create([
                'id_candidato' => $cand->id_candidato,
                'id_oferta' => $ofertas->random()->id_oferta
            ]);
        });
    }
}
