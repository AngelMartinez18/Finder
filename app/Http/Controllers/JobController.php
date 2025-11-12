<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index()
    {
        $jobs = DB::table('ofertas')
            ->join('empresas', 'ofertas.id_empresa', '=', 'empresas.id_empresa')
            ->select(
        'id_oferta', 
                'titulo',
                'empresas.nombre_empresa',
                'ofertas.descripcion',
                'ofertas.ubicacion',
                'tipo_contrato',
                'salario')
            ->whereIn('ofertas.estado', ['activa', 'pausada'])
            ->orderByDesc('ofertas.created_at')
            ->limit(12)
            ->get();

        return view('searchjob', compact('jobs'));
    }

    // Detalle: carga solo el trabajo solicitado
    public function show($id)
    {
        $job = DB::table('ofertas')
            ->join('empresas', 'ofertas.id_empresa', '=', 'empresas.id_empresa')
            ->select(
        'ofertas.id_oferta',
                'empresas.nombre_empresa',
                'empresas.logo',
                'ofertas.titulo',
                'ofertas.descripcion',
                'ofertas.requisitos',
                'ofertas.salario',
                'ofertas.ubicacion',
                'ofertas.tipo_contrato',
                'ofertas.fecha_publicacion',
                'ofertas.estado') // ajusta
            ->where('id_oferta', $id)
            ->first();

        if (! $job) {
            abort(404);
        }
        else if($job->estado === 'activa') {
            $job->estado = 'Activo';
        }
        else if($job->estado === 'pausada') {
            $job->estado = 'En revision';
        }
        else{
            $job->estado = 'Cerrado';
        }

        return view('jobdetails', compact('job'));
    }
}