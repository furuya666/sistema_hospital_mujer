<?php

namespace App\Http\Controllers;

use App\File;
use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
class FileController extends Controller
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
        $datos['files']=DB::table('personas')
        ->join('files','files.persona_id','personas.id')
        ->where('persona_id','like',"%$persona_id%")
        ->orderBy('personas.nombre', 'asc')
        ->paginate(5);
        return view('files.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('files.create');
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
            'persona_id'=>'required|string|',
            'certificado_estudio' => 'required|string|',
            'certificado_trabajo' => 'required|string|',
            'certificado_contraloria' => 'required|string|',
            'certificado_nacimiento' => 'required|string|',
            'certificado_matrimonio' => 'required',
            'certificado_antecedentes_policiales' => 'required|string|',
            'memorandum_designacion' => 'required|string|',
            'contrato_trabajo'=>'required|string|',
            'acciones_personal' => 'required|string|',
            'solicitud_vacaiones' => 'required|string|',
            'solicitud_permiso' => 'required|string|',
            'evaluacion_confirmacion' => 'required|string|',
            'evaluacion_desempeño' => 'required|string|',
            'acta_seleccion' => 'required|string|',
            'años_servicio' => 'required|string|',
            'servicio_militar' => 'required|string|',
            'carnet_identidad' => 'required|string|',
            'fotografia' => 'required'
            ];
            $Mensaje=["required"=>'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            $datosFile=request()->all();
            $datosFile=request()->except('_token');
            if($request->hasfile('pdf')){
                $datosFile['pdf']=$request->file('pdf')->store('uploads','public');
            }else{
                $datosFile['pdf']='default';
            }
            ///
            $da =Persona::where('id',$request->input('persona_id'))->count();
            $de =File::where('persona_id',$request->input('persona_id'))->count();
            if($da > 0){
                if($de > 0){
                    return redirect('files/create')->with('Mensaje','Esta Persona Ya Tiene Un File Designado');
                }
                File::insert($datosFile);
               return redirect('files')->with('Mensaje','File agregado con exito');
            
            }else{
                return redirect('files/create')->with('Mensaje','No Existe Ningun Registro Con El CI Que Ingreso');
            }
          //
           // File::insert($datosFile);
           // return redirect('files')->with('Mensaje','File agregado con exito');
            
            ////
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $file=File::find($id);
       
        //$persona= Persona::all();
        $pdf= PDF::loadView('files/show',compact('file'));
        
        return $pdf->stream('file');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $file=File::findOrFail($id);
        return view('files.edit',compact('file'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'certificado_estudio' => 'required|string|',
            'certificado_trabajo' => 'required|string|',
            'certificado_contraloria' => 'required|string|',
            'certificado_nacimiento' => 'required|string|',
            'certificado_matrimonio' => 'required',
            'certificado_antecedentes_policiales' => 'required|string|',
            'memorandum_designacion' => 'required|string|',
            'contrato_trabajo'=>'required|string|',
            'acciones_personal' => 'required|string|',
            'solicitud_vacaiones' => 'required|string|',
            'solicitud_permiso' => 'required|string|',
            'evaluacion_confirmacion' => 'required|string|',
            'evaluacion_desempeño' => 'required|string|',
            'acta_seleccion' => 'required|string|',
            'años_servicio' => 'required|string|',
            'servicio_militar' => 'required|string|',
            'carnet_identidad' => 'required|string|',
            'fotografia' => 'required'
            ];
            $Mensaje=["required"=>'El :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);
            $datosFile=request()->except('_token','_method');
            if($request->hasfile('pdf')){
                $file=File::findOrFail($id);
                Storage::delete('public/'.$file->pdf);
                $datosFile['pdf']=$request->file('pdf')->store('uploads','public');
           
            }
            File::where('id','=',$id)->update($datosFile);
            return redirect('files')->with('Mensaje','Persona modificada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
