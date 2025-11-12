<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| PÚBLICAS (sin sesión)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/forgotpassword', function () {
    return view('forgotpassword');
})->name('forgotpassword');


/*
|--------------------------------------------------------------------------
| RUTAS ACCESIBLES SOLO PARA INVITADOS
|--------------------------------------------------------------------------
*/
// (Si deseas agruparlas después, lo hacemos; por ahora las dejamos así)



/*
|--------------------------------------------------------------------------
| RUTAS PRIVADAS (requieren autenticación)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // ✅ Ejemplo de home por rol
    Route::get('/candidato/home', function () {
        return view('candidato.dashboard');   // Puedes cambiar la vista luego
    })->name('candidato.home');

    Route::get('/empresario/home', function () {
        return view('empresario.dashboard');
    })->name('empresario.home');

});


/*
|--------------------------------------------------------------------------
| RESTO DE RUTAS (NO TOCADA)
|--------------------------------------------------------------------------
*/

Route::get('/searchjob', function () {
    return view('searchjob');
})->name('searchjob');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/publishjob', function () {
    return view('publishjob');
})->name('publishjob');

Route::get('/jobdetails', function () {
    return view('jobdetails');
})->name('jobdetails');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/editperfil', function () {
    return view('editperfil');
})->name('editperfil');
