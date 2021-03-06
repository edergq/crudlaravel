<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['asignaturas']=Asignatura::paginate(4);

        return view ('asignaturas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('asignaturas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $datosAsignatura=request()->all();
        //return response()->json($datosAsignatura);
        $datosAsignatura=request()->except('_token');
        //AsignaturaDB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle'])
        Asignatura::insert($datosAsignatura);
        //return response()->json($datosAsignatura);
        return redirect('asignaturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function show(Asignatura $asignatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $asignatura =Asignatura::findOrFail($id);
        return view('asignaturas.editar',compact('asignatura'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosAsignatura=request()->all();
        $datosAsignatura=request()->except(['_token','_method']);
        Asignatura::where('id','=',$id)->update($datosAsignatura);
        return redirect('asignaturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignatura  $asignatura
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //$asignatura=Asignatura::findOrFail($id);
        Asignatura::destroy($id);
        return redirect('asignaturas');

    }
}
