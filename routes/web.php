<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;


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

use App\Http\Controllers\CandidatoController;

Route::middleware(['auth'])->group(function () {

    // Dashboard principal
    Route::get('/candidato/home', [CandidatoController::class, 'index'])
        ->name('candidato.home');

    // Editar perfil
    Route::get('/candidato/perfil', [CandidatoController::class, 'perfil'])
        ->name('candidato.perfil');

    Route::post('/candidato/perfil', [CandidatoController::class, 'updatePerfil'])
        ->name('candidato.perfil.update');

    // Experiencia
    Route::get('/candidato/experiencias', [CandidatoController::class, 'experiencias'])
        ->name('candidato.experiencias');

    Route::post('/candidato/experiencias', [CandidatoController::class, 'storeExperiencia'])
        ->name('candidato.experiencias.store');

    // Educación
    Route::get('/candidato/educacion', [CandidatoController::class, 'educacion'])
        ->name('candidato.educacion');

    Route::post('/candidato/educacion', [CandidatoController::class, 'storeEducacion'])
        ->name('candidato.educacion.store');

    // Habilidades
    Route::get('/candidato/habilidades', [CandidatoController::class, 'habilidades'])
        ->name('candidato.habilidades');

    Route::post('/candidato/habilidades', [CandidatoController::class, 'storeHabilidad'])
        ->name('candidato.habilidades.store');

    // Postulaciones
    Route::get('/candidato/postulaciones', [CandidatoController::class, 'postulaciones'])
        ->name('candidato.postulaciones');
});


Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/empresario/home', function () {
        return view('empresario.dashboard');
    })->name('empresario.home');

});


/*
|--------------------------------------------------------------------------
| RESTO DE RUTAS (NO TOCADA)
|--------------------------------------------------------------------------
*/
Route::get('/searchjob', [JobController::class, 'index'])->name('searchjob');


Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/publishjob', function () {
    return view('publishjob');
})->name('publishjob');

Route::get('/jobdetails/{id}', [JobController::class, 'show'])->name('jobdetails');

Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/editperfil', function () {
    return view('editperfil');
})->name('editperfil');
