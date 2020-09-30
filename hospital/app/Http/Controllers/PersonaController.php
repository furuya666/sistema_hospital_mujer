<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use Carbon\Carbon;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id=$request->get('Buscador');
        $datos['personas']=DB:: table('especialidads')
        ->join('personas','personas.especialidad_id','especialidads.id')
        ->where('personas.id','like',"%$id%")
        ->orderBy('nombre')
        ->paginate(3);

        return view('personas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.create');
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
        //$datosPersona=request()->all();
        $campos=[
        'id'=>'required',
        'nombre' => 'required|string|',
        'apellido_paterno' => 'required|string|',
        'apellido_materno' => 'required|string|',
        'cumpleaños' => 'required|date',
        'telefono' => 'required|integer',
        'especialidad_id' => 'required|string'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPersona=request()->except('_token');
        ////////
        $da =Persona::where('id',$request->input('id'))->count();
        if($da > 0){
            return redirect('personas/create')->with('Mensaje','El CI Que Ingreso Ya Existe');
        }else{
            Persona::insert($datosPersona);
        return redirect('personas')->with('Mensaje','Persona agregada con exito');
        }

        ////
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
            $a=$request->get('Buscador1');
            $personas=DB::table('personas')
            ->select('personas.*')
            ->where('especialidad_id','like',"%$a%")
            ->get();
            $datos=compact('personas');
            $pdf= PDF::loadView('personas/show',$datos);
            return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view('personas.edit',compact('persona'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos=[
            'nombre' => 'required|string|',
            'apellido_paterno' => 'required|string|',
            'apellido_materno' => 'required|string|',
            'cumpleaños'=>'required|date',
            'telefono' => 'required|integer',
            'especialidad_id'=>'required|string'
            ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        $datosPersona=request()->except(['_token','_method']);
        
        Persona::where('id','=',$id)->update($datosPersona);
       
       // return view('personas.edit',compact('persona'));
    return redirect('personas')->with('Mensaje','Persona modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('personas')->with('Mensaje','Persona eliminada con exito');

    }
    
}
