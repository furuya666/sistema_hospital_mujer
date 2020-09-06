<?php

namespace App\Http\Controllers;

use App\Vacacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
class VacacionController extends Controller
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
        $datos['vacacions']=DB::table('personas')
        ->select('persona_id')
        ->join('vacacions','vacacions.persona_id','personas.id')
        ->groupBy('persona_id')
        ->having('persona_id','like',"%$persona_id%")
        ->paginate(5);
        return view('vacacions.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vacacions.create');
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
           'inicio_vacaciones'=>'required|string',
           'fin_vacaciones'=>'required|string'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosVacacion=request()->all();
        $datosVacacion=request()->except('_token');
        Vacacion::insert($datosVacacion);
        return  redirect('vacacions')->with('Mensaje','Vacacion asignada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacacion  $vacacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $id=$request->get('Buscador');
        $mes=$request->get('Buscador1');
        $año=$request->get('Buscador2');
        $vacacions=DB::table('vacacions')
        ->select('vacacions.*')
        ->where('persona_id','like',"%$id%")
        ->where('inicio_vacaciones','like',"%$mes%")
        ->where('inicio_vacaciones','like',"%$año%")
        ->get();
        $datos=compact('vacacions');
        $pdf= PDF::loadView('vacacions/show',$datos);
        return $pdf->stream();
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacacion  $vacacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vacacion=Vacacion::findOrFail($id);
        return view('vacacions.edit',compact('vacacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacacion  $vacacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacacion $vacacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacacion  $vacacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacacion $vacacion)
    {
        //
    }
}
