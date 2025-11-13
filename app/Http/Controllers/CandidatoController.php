<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    // Dashboard principal
    public function index()
    {
        $user = Auth::user();

        // Obtener su registro de candidato
        $candidato = $user->candidato;

        return view('candidatos.dashboard', compact('candidato', 'user'));
    }


    public function perfil()
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        return view('candidatos.perfil', compact('usuario', 'candidato'));
    }

    public function updatePerfil(Request $request)
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        $candidato->update([
            'telefono' => $request->telefono,
            'ubicacion' => $request->ubicacion,
            'fecha_nacimiento' => $request->fecha_nacimiento,
        ]);

        return back()->with('success', 'Perfil actualizado correctamente.');
    }

    public function experiencias()
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        return view('candidatos.experiencia', [
            'experiencias' => $candidato->experiencias
        ]);
    }

    public function storeExperiencia(Request $request)
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        $candidato->experiencias()->create($request->all());

        return back()->with('success', 'Experiencia agregada.');
    }

    public function educacion()
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        return view('candidatos.educacion', [
            'educaciones' => $candidato->educaciones
        ]);
    }

    public function storeEducacion(Request $request)
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        $candidato->educaciones()->create($request->all());

        return back()->with('success', 'Educación agregada.');
    }

    public function habilidades()
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        return view('candidatos.habilidades', [
            'habilidades' => $candidato->habilidades
        ]);
    }

    public function storeHabilidad(Request $request)
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        $candidato->habilidades()->attach($request->id_habilidad);

        return back()->with('success', 'Habilidad agregada.');
    }

    public function postulaciones()
    {
        $usuario = Auth::user();
        $candidato = $usuario->candidato;

        return view('candidatos.postulaciones', [
            'postulaciones' => $candidato->postulaciones
        ]);
    }
}
