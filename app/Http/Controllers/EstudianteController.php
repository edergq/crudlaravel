<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    
    public function index()
    {
        // 
        $datos['estudiantes']=Estudiante::paginate();
        
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
        Estudiante::create($datosEstudiante);
        //  return response()->json($datosEstudiante);
        return redirect('estudiantes');
        
    }

    
    public function show(Estudiante $estudiante)
    {
        //
    }

    
    public function edit($id)
    {
        //
        $estudiante =Estudiante::findOrFail($id);
        return view('estudiante.editar',compact('estudiante'));


    }
    
    public function update(Request $request, $id)
    {
        //       

        $datosEstudiante=request()->all();        
        $datosEstudiante=request()->except('_token','_method');     

        Estudiante::where('id','=',$id)->update($datosEstudiante);
        return redirect('estudiantes');

        

    }


    public function destroy($id)
    {
        //
        Estudiante::destroy($id);
        return redirect('estudiantes');


    }
}
