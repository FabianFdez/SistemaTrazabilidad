@extends('layouts.app')


@section('content')

<div>
    <h1 class="titulo" >
        MÓDULO USUARIOS
    </h1>
</div>

<!--  Muestra la accion que se realizo-->
@if(session('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{session('status')}} </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<form action="" method="post">
    <div class="well well-sm text-right">
        <div  style=" float: left; width:300px;">
            <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
            <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
        </div>
        <a title="Nuevo Registro" class="mdl-button" href="{{url('/usuarios/create')}}" style="height:64px"><img src="iconos/addd.png"/></a>
    </div>
    <div style="margin-top: 1%;">


        <table class="table" id="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>ROLES</th>
                    <th>Usuario</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->surname}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->ROLES}}</th>
                    <th>{{$user->usuario}}</th>
                    <!-- Para actualizar ponemos la ruta y concardenamos el id -->                  
                    <th><a title="Actualizar" class="mdl-navigation__link" href="{{url('/usuarios/'.$user->id )}}"><i class="material-icons" role="presentation">border_color</i></a></th>
                    <!-- Para eliminar ponemos la ruta y concardenamos el id  se le pone un onclick para verificar la confirmacion de la accion -->
                    <th> <a title="Eliminar" class="mdl-navigation__link " href="{{url('/usuarios/delete/'. $user->id)}}" onclick="return confirmar('al usuario con numero de cédula: ','{{$user->id}}') "><i class="material-icons" role="presentation">close</i></a></th>
                </tr>

                @endforeach
                 <script src="js/buscador.js"></script>
            </tbody>
        </table>
    </div>
</form>
@stop

