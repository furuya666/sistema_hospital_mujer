<?php

namespace App\Http\Controllers;

use App\Permiso;
use App\Persona;
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
            'tipo_id'=>'required|string',
            'hora_ini'=>'required|string',
            'ini_permiso'=>'required|date',
            'fin_permiso'=>'required|date'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPermiso=request()->all();
        $datosPermiso=request()->except('_token');
        ////
        $da =Persona::where('id',$request->input('persona_id'))->count();
        if($da > 0){
            Permiso::insert($datosPermiso);
            return redirect('permisos')->with('Mensaje','Permiso asignado con exito');
        }else{
            return redirect('permisos/create')->with('Mensaje','No Existe Ningun Registro Con El CI Que Ingreso');
        }
        ////
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $mes=$request->get('Buscador1');
        $año=$request->get('Buscador2');
        $a=$request->get('Buscador3');
        $per=$request->get('Buscador4');
        if($a==null){
            $permisos=DB::table('permisos')
            ->select('permisos.*')
            ->join('personas','permisos.persona_id','personas.id')
            ->where('tipo_id','like',"%$per%")
            ->where('ini_permiso', 'like',"%$mes%")
            ->where('ini_permiso','like',"%$año%")
            ->get();
            $datos=compact('permisos');
            $pdf= PDF::loadView('permisos/show',$datos);
            return $pdf->stream();
        }else{
            $permisos=DB::table('permisos')
            ->select('permisos.*')
            ->join('personas','permisos.persona_id','personas.id')
            ->where('tipo_id','like',"%$per%")
            ->where('persona_id','like',"%$a%")
            ->where('ini_permiso', 'like',"%$mes%")
            ->where('ini_permiso','like',"%$año%")
            ->get();
            $datos=compact('permisos');
            $pdf= PDF::loadView('permisos/show',$datos);
            return $pdf->stream();
        } 
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
