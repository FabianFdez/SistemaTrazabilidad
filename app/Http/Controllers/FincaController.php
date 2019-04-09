<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Finca;
class FincaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          try {
            $fincas = Finca::orderBy('numFinca')->get();
            return view('fincas.fincas', array(
                'finca' => $fincas
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
            return view('fincas.formularioFinca');
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
            'numFinca' => 'required|min:1|integer',
            'nombre' => 'required|String',
            'area' => 'required|numeric',
            'ubicacion' => 'required|String',
        ]);
        try {
            $idFinca = $request->input('numFinca');
            $Finca = Finca::where('numFinca', $idFinca)->first();
            if (!isset($Finca)) {
                $saveFinca = new Finca();
                $saveFinca->numFinca = $request->input('numFinca');
                $saveFinca->nombre = $request->input('nombre');
                $saveFinca->area = $request->input('area');
                $saveFinca->ubicacion = $request->input('ubicacion');
                $saveFinca->save();
                return redirect()->action('FincaController@index')->with('status', 'Finca agregada correctamente!!!!');
            } else {
                return redirect()->action('FincaController@create')->with('status', 'Finca ya esta registrado');
            }
        } catch (Exception $e) {
            return redirect()->action('FincaController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finca = Finca ::where('numFinca', $id)->first();
        return view('fincas.formularioFinca', array('fincas' => $finca));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validatedData = $this->validate($request, [
            'numFinca' => 'required|min:1|integer',
            'nombre' => 'required|String',
            'area' => 'required|numeric',
            'ubicacion' => 'required|String',
        ]);
        try {
            $saveFinca = Finca::find($id);
            $saveFinca->nombre = $request->input('nombre');
            $saveFinca->area = $request->input('area');
            $saveFinca->ubicacion = $request->input('ubicacion');
            $saveFinca->save();
            return redirect()->action('FincaController@index')->with('status', 'Finca actualizada correctamente!!!!');
        } catch (Exception $e) {
            return redirect()->action('FincaController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteFinca($id)
    {
        $Finca = Finca::where('numFinca', $id)->first();
        $Finca->delete();
        return redirect()->action('FincaController@index')->with('status', 'Finca eliminada correctamente!!!!');
    }
}
