<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->query('input-search');
        $location = $request->query('input-location');

        $jobs = DB::table('ofertas')
            ->join('empresas', 'ofertas.id_empresa', '=', 'empresas.id_empresa')
            ->select(
        'ofertas.id_oferta', 
                'ofertas.titulo',
                'empresas.nombre_empresa',
                'ofertas.descripcion',
                'ofertas.ubicacion',
                'ofertas.estado',
                'ofertas.salario')
            ->whereIn('ofertas.estado', ['activa', 'pausada'])
            ->when($q, function ($query, $q) {
                return $query->where(function ($subQuery) use ($q) {
                    $subQuery->where('ofertas.titulo', 'like', '%' . $q . '%')
                        ->orWhere('ofertas.descripcion', 'like', '%' . $q . '%')
                        ->orWhere('empresas.nombre_empresa', 'like', '%' . $q . '%');
                });
            })
            ->when($location, function ($query, $location) {
                return $query->where('ofertas.ubicacion', 'like', '%' . $location . '%');
            })
            ->orderByDesc('ofertas.created_at')
            ->limit(12)
            ->get();

        if ($request->ajax()) {
            return view('partials.job-cards', compact('jobs'))->render();
        }

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

    public function search(string $input)
    {
        
    }
}