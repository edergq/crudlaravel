<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    
    public function index()
    {
        // 
        $datos['estudiantes']=Estudiante::paginate(3);
        return view('estudiante.index',$datos);
    }

    


    public function create()
    {
        //
        return view('estudiante.crear');
    }

    
    public function store(Request $request)
    {
        $datosEstudiante=request()->all();        
        $datosEstudiante=request()->except('_token');        
        Estudiante::insert($datosEstudiante);
        //  return response()->json($datosEstudiante);
        redirect('estudiantes');
        
    }

    
    public function show(Estudiante $estudiante)
    {
        //
    }

    
    public function edit(Estudiante $estudiante)
    {
        //
    }
    
    public function update(Request $request, Estudiante $estudiante)
    {
        //
    }


    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
