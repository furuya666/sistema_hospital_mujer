<?php

namespace App\Http\Controllers;

use App\falta;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
class FaltaController extends Controller
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
        $datos['faltas']=DB:: table('personas')
        ->select('persona_id')
        ->join('faltas','faltas.persona_id','personas.id')
        ->groupBy('persona_id')
        ->having('persona_id','like',"%$persona_id%")
        ->paginate(5);
        return view('faltas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('faltas.create');
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
            'fecha'=>'required|date'
           
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosFalta=request()->all();
        $datosFalta=request()->except('_token');
        ////
        $da =Persona::where('id',$request->input('persona_id'))->count();
        if($da > 0){
            falta::insert($datosFalta);
            return redirect('faltas')->with('Mensaje','Falta asignado con exito');
        }else{
            return redirect('faltas/create')->with('Mensaje','No Existe Ningun Registro Con El CI Que Ingreso');
        }
        ///
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\falta  $falta
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $mes=$request->get('Buscador1');
        $año=$request->get('Buscador2');
        $a=$request->get('Buscador3');
        if($a==null){
            $faltas=DB::table('faltas')
            ->select('faltas.*','personas.*')
            ->join('personas','faltas.persona_id','personas.id')
            ->where('fecha','like',"%$mes%")
            ->where('fecha','like',"%$año%")
            ->get();
            $datos=compact('faltas');
            $pdf= PDF::loadView('faltas/show',$datos);
            return $pdf->stream();
        }else{
            $faltas=DB::table('faltas')
            ->select('faltas.*','personas.*')
            ->join('personas','faltas.persona_id','personas.id')
            ->where('faltas.persona_id','like',"%$a%")
            ->where('fecha','like',"%$mes%")
            ->where('fecha','like',"%$año%")
            ->get();
            $datos=compact('faltas');
            $pdf= PDF::loadView('faltas/show',$datos);
            return $pdf->stream();
        }
       
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\falta  $falta
     * @return \Illuminate\Http\Response
     */
    
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\falta  $falta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, falta $falta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\falta  $falta
     * @return \Illuminate\Http\Response
     */
    public function destroy(falta $falta)
    {
        //
    }
}
