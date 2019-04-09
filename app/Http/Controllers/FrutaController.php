<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fruta;
class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          try {
            $fruta = Fruta::orderBy('codigo')->get();
            return view('frutas.frutas', array(
                'fruta' => $fruta
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
            return view('frutas.formularioFruta');
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
            'codigo' => 'required|min:1|integer',
            'producto' => 'required',
            'presentacion' => 'required',
        ]);
        try {
            $idFruta = $request->input('codigo');
            $Fruta = Fruta::where('codigo', $idFruta)->first();
            if (!isset($Fruta)) {
                $saveFruta = new Fruta();
                    $saveFruta->codigo = $request->input('codigo');
                $saveFruta->producto = $request->input('producto');
                $saveFruta->presentacion = $request->input('presentacion');
                $saveFruta->save();
                return redirect()->action('FrutaController@index')->with('status', 'Fruta agregada correctamente!!!!');
            } else {
                return redirect()->action('FrutaController@create')->with('status', 'Fruta ya esta registrado');
            }
        } catch (Exception $e) {
            return redirect()->action('FrutaController@index');
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
        $fruta = Fruta ::where('codigo', $id)->first();
        return view('frutas.formularioFruta', array('frutas' => $fruta));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $this->validate($request, [
            'codigo' => 'required|min:1|integer',
            'producto' => 'required',
            'presentacion' => 'required',
        ]);
        try {
            $saveFruta = Fruta::find($request->input('codigo'));
            $saveFruta->producto = $request->input('producto');
            $saveFruta->presentacion = $request->input('presentacion');
            $saveFruta->save();
            return redirect()->action('FrutaController@index')->with('status', 'Fruta actualizada correctamente!!!!');
        } catch (Exception $e) {
            return redirect()->action('FrutaController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function deleteFruta($id)
    {
        $Fruta = Fruta::find($id);
        $Fruta->delete();
        return redirect()->action('FrutaController@index')->with('status', 'Fruta eliminada correctamente!!!!');
    }
}
