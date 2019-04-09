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
           
           /* $seccion = Seccion::orderBy('numSeccion')->get();
            return view('secciones.secciones', array(
                'seccion' => $seccion
            ));*/
            return view('secciones.elegirFinca');
        } catch (Exception $e) {
            return view('home');
        }
    }

    public function seccionesLaCueva(){
        session(['idfinca' => 'seccionesLaCueva']);
        $seccion = Seccion::where('numFinca','=',36)->get();
        return view('secciones.secciones', array(
                'seccion' => $seccion
        ));
    }

    public function seccionesFiladelfia(){
        session(['idfinca' => 'seccionesFiladelfia']);
        $seccion = Seccion::where('numFinca','=',28)->get();
        return view('secciones.secciones', array(
                'seccion' => $seccion
        ));

    } 
    public function seccionesMaruca(){
        session(['idfinca' => 'seccionesMaruca']);
        $seccion = Seccion::where('numFinca','=',29)->get();
        return view('secciones.secciones', array(
                'seccion' => $seccion
        ));
    }


    public function volver(){
       return redirect()->action('SeccionController@' . session('idfinca'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      try {

           $idFinca = session('idfinca');
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
                $saveSeccion->estado = 0;
                $saveSeccion->save();
                return redirect()->action('SeccionController@' . session('idfinca'))->with('status', 'Seccion agregada correctamente!!!!');
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
                'area' => $request->input('area'),
            ]);
         return redirect()->action('SeccionController@'. session('idfinca'))->with('status', 'Seccion actualizada correctamente!!!!');
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
        return redirect()->action('SeccionController@'.session('idfinca'))->with('status', 'Seccion eliminada Correctamente!!!!!');
           
    }
}
