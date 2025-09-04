<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Muestra la vista del formulario de login
    public function show()
    {
        return view('login');
    }

    // Procesa el login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, redirige al dashboard
            return redirect()->intended('dashboard');
        }

        // Si son incorrectas, vuelve al login con error
        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ]);
    }
}
