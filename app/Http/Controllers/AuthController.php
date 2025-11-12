<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\Empleador;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | REGISTRO
    |--------------------------------------------------------------------------
    */
    public function register(Request $request)
    {
        // Validación base
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|min:8|confirmed',
            'tipo_usuario' => 'required|in:candidato,empleador',
        ]);

        // Crear usuario principal
        $usuario = Usuario::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'tipo_usuario' => $validated['tipo_usuario'],
            'visibilidad_perfil' => true,
            'terminos_aceptados' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Lógica por tipo de usuario
        |--------------------------------------------------------------------------
        */
        if ($usuario->tipo_usuario === 'candidato') {
            Candidato::create([
                'id_usuario' => $usuario->id_usuario,
                'nombre' => $usuario->nombre,
                'apellido' => '',
                'ubicacion' => $request->input('ubicacion') ?? 'Sin especificar',
                'telefono' => $request->input('telefono') ?? 'No definido',
                'visibilidad_cv' => 'solo_empresas',
            ]);
        } else {
            // Crear empresa primero
            $empresa = Empresa::create([
                'nombre_empresa' => $request->input('empresa', 'Sin nombre'),
                'descripcion' => $request->input('descripcion', ''),
                'sector' => $request->input('sector', ''),
                'ubicacion' => $request->input('ubicacion', ''),
                'sitio_web' => $request->input('website', ''),
                'estado' => 'activa',
            ]);

            // Crear empleador asociado
            Empleador::create([
                'id_usuario' => $usuario->id_usuario,
                'id_empresa' => $empresa->id_empresa,
                'rol_empresa' => 'Dueño',
            ]);
        }

        // Autenticar automáticamente
        Auth::login($usuario);

        // Redirigir según el tipo de usuario
        if ($usuario->tipo_usuario === 'candidato') {
            return redirect()->route('candidato.home')->with('success', 'Registro exitoso como candidato.');
        } else {
            return redirect()->route('empresario.home')->with('success', 'Registro exitoso como empleador.');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | LOGIN
    |--------------------------------------------------------------------------
    */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $usuario = Auth::user();

            if ($usuario->tipo_usuario === 'candidato') {
                return redirect()->route('candidato.home');
            } elseif ($usuario->tipo_usuario === 'empleador') {
                return redirect()->route('empresario.home');
            } else {
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ])->onlyInput('email');
    }

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
