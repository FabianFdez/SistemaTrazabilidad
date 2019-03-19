<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Seccion;
use App\Finca;
class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          try {
            $seccion = Seccion::orderBy('numSeccion')->get();
            return view('secciones.secciones', array(
                'seccion' => $seccion
            ));
        } catch (Exception $e) {
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      try {
           $fincas = Finca::orderBy('numFinca')->get();
            return view('secciones.formularioSeccion', array(
                'fincas' => $fincas
            ));
        } catch (Exception $e) {
            return view('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'numSeccion' => 'required|min:1|integer',
            'numFinca' => 'required|String',
            'area' => 'required|numeric',
        ]);
        try {
            $idSeccion = $request->input('numSeccion');
            $idFinca = $request->input('numFinca');
            $seccion = Seccion::where('numSeccion',$idSeccion)->where('numFinca', $idFinca)->first();
            if (!isset($seccion)) {
                $saveSeccion = new Seccion();
                $saveSeccion->numSeccion = $request->input('numSeccion');
                $saveSeccion->numFinca = $request->input('numFinca');
                $saveSeccion->area = $request->input('area');
                $saveSeccion->save();
                return redirect()->action('SeccionController@index')->with('status', 'Seccion agregada correctamente!!!!');
            } else {
                return redirect()->action('SeccionController@create')->with('status', 'Seccion ya esta registrado');
            }
        } catch (Exception $e) {
            return redirect()->action('SeccionController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numSeccion, $numFinca)
    {
         $seccion = Seccion::where('numSeccion',$numSeccion)->where('numFinca', $numFinca)->first();
         $fincas = Finca::orderBy('numFinca')->get();
        return view('secciones.formularioSeccion', array(
                'seccion' => $seccion,
                'finc' => $fincas
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numSeccion, $numFinca) {
        try{
        $updates = DB::table('seccion')
                    ->where('numSeccion', '=', $numSeccion)
                    ->where('numFinca', '=', $numFinca)
                    ->update([
                'extension' => $request->input('extension'),
            ]);
         return redirect()->action('SeccionController@index')->with('status', 'Seccion actualizada correctamente!!!!');
        } catch(Exception $e){
             return redirect()->action('SeccionController@index')->with('status', 'Surgio un error!!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteSeccion($numSeccion, $numFinca)
    {
        Seccion::where('numSeccion',$numSeccion)->where('numFinca', $numFinca)->delete();
        return redirect()->action('SeccionController@index')->with('status', 'Seccion eliminada Correctamnete!!!!!');
           
    }
}
