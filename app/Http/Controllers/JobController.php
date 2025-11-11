<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    // Listado para la página de búsqueda (solo columnas necesarias)
    public function index()
    {
        $jobs = DB::table('ofertas') // ajusta el nombre de la tabla si es otro
            ->select('id_oferta','titulo', 'id_empresa', 'descripcion','ubicacion','tipo_contrato','salario') // columnas que necesites
            ->where('estado', 'activa') // opcional: filtrar por publicados
            ->orderByDesc('created_at')
            ->limit(12)
            ->get();

        return view('searchjob', compact('jobs'));
    }

    // Detalle: carga solo el trabajo solicitado
    public function show($id)
    {
        $job = DB::table('ofertas')
            ->select('id_oferta','titulo', 'id_empresa', 'descripcion','ubicacion','tipo_contrato','salario') // ajusta
            ->where('id_oferta', $id)
            ->first();

        if (! $job) {
            abort(404);
        }

        return view('jobdetails', compact('job'));
    }
}