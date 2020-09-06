<?php

namespace App\Http\Controllers;

use App\Permiso;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $persona_id=$request->get('Buscador');
        $datos['permisos']=DB:: table('personas')
        ->select('persona_id')
        ->join('permisos','permisos.persona_id','personas.id')
        ->groupBy('persona_id')
        ->having('persona_id','like',"%$persona_id%")
        ->paginate(5);
       
        return view('permisos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('permisos.create');
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
        $campos=[
            'persona_id'=>'required',
            'tipo'=>'required|string',
            'fecha_inicio'=>'required|string',
            'hora_inicio'=>'required|string',
            'fecha_fin'=>'required|string'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPermiso=request()->all();
        $datosPermiso=request()->except('_token');
        Permiso::insert($datosPermiso);
        return redirect('permisos')->with('Mensaje','Permiso asignado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id=$request->get('Buscador');
        $mes=$request->get('Buscador1');
        $per=$request->get('Buscador2');
        $año=$request->get('Buscador3');
        $permisos=DB::table('permisos')
        ->select('permisos.*')
        ->where('persona_id','like',"%$id%")
        ->where('tipo','like',"%$per%")
        ->where('fecha_inicio', 'like',"%$mes%")
        ->where('fecha_inicio','like',"%$año%")
        ->get();
        $datos=compact('permisos');
        $pdf= PDF::loadView('permisos/show',$datos);
        return $pdf->stream();
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit(Permiso $permiso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permiso $permiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permiso $permiso)
    {
        //
    }
   
    
   
}
