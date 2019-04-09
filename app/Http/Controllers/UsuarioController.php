<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class UsuarioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $users = User::orderBy('id')->get();
            return view('usuarios.usuarios', array(
                'users' => $users 
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
    public function create() {
        try {
            return view('usuarios.formularioUsuario');
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
    public function store(Request $request) {
        $validatedData = $this->validate($request, [
            'id' => 'required|min:9|max:9|alpha_num',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'manejo' => 'required',
            'contrasena' => 'required|min:8|max:10|alpha_num',
            'usuario' => 'required|alpha',
           
        ]);
        try {
            $cedUsuario = $request->input('id');
            $Usuario = User::where('id', $cedUsuario)->first();
            if (!isset($Usuario)) {
                $saveUsuario = new User();
                $saveUsuario->id = $request->input('id');
                $saveUsuario->name = $request->input('nombre');
                $saveUsuario->surname = $request->input('apellido');
                $compu1 = $request->input('email');
                $compu2 = $request->input('email2');
                $email =  $compu1 . $compu2;
                $saveUsuario->email = $email;
                $saveUsuario->password = Hash::make($request->input('contrasena'));
                $saveUsuario->ROLES = $request->input('manejo');
                $saveUsuario->usuario = $request->input('usuario');
                $saveUsuario->save();
                return redirect()->action('UsuarioController@index')->with('status', 'Usuario agregado correctamente!!!!');
            } else {
                return redirect()->action('UsuarioController@create')->with('status', 'Cedula usuario ya esta registrado');
            }
        } catch (Exception $e) {
            return redirect()->action('UsuarioController@index');
        }
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id) {
        $usuario = User ::where('id', $id)->first();
        return view('usuarios.formularioUsuario', array('usuario' => $usuario));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validatedData = $this->validate($request, [
            'id' => 'required|min:9|integer',
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required',
            'manejo' => 'required',
            'contrasena' => 'required|min:8',
            'usuario' => 'required|alpha',
            
        ]);
        try {
            $saveUsuario = User::find($id);
            $saveUsuario->name = $request->input('nombre');
            $saveUsuario->surname = $request->input('apellido');
            $compu1 = $request->input('email');
            $compu2 = $request->input('email2');
            $email =  $compu1 . $compu2;
            $saveUsuario->email = $email;
            $saveUsuario->password = Hash::make($request->input('contrasena'));
            $saveUsuario->ROLES = $request->input('manejo');
            $saveUsuario->usuario = $request->input('usuario');
            $saveUsuario->save();
            return redirect()->action('UsuarioController@index')->with('status', 'Usuario actualizado correctamente!!!!');
        } catch (Exception $e) {
            return redirect()->action('UsuarioController@index')->with('status', 'Surgio un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function deleteUsuario($id) {
        $Usuario = User::where('id', $id)->first();

        $Usuario->delete();
        return redirect()->action('UsuarioController@index')->with('status', 'Usuario eliminado correctamente!!!!');
    }
}
