@extends('layouts.app')

@section('content')

<div>
    <h1 class="titulo" >
        MÓDULO SECCIONES
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
        <a title="Nuevo Registro" class="mdl-button" href="{{url('/secciones/create')}}" style="height:64px"><img src="iconos/addd.png"/></a>
    </div>
    <div style="margin-top: 1%;">


        <table id="tabla" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID Sección</th>
                    <th scope="col">ID Finca</th>
                    <th scope="col">Area (Ha)</th>
                    <th colspan="2">Acciones</th> 
                </tr>
            </thead>

            <tbody>
                @foreach($seccion as $fsec)
                <tr>
                    <th>{{$fsec->numSeccion}}</th>
                    <th>{{$fsec->numFinca}}</th>
                    <th>{{$fsec->area}}</th>
                    <!-- Para actualizar ponemos la ruta y concardenamos el id -->                  
                    <th><a title="Actualizar" class="mdl-navigation__link" href="{{url('/secciones/'.$fsec->numSeccion .'/'. $fsec->numFinca )}}"><i class="material-icons" role="presentation">border_color</i></a></th>
                    <!-- Para eliminar ponemos la ruta y concardenamos el id  se le pone un onclick para verificar la confirmacion de la accion -->
                    <th> <a id="show-dialog" title="Eliminar" class="mdl-navigation__link " href="{{url('/secciones/delete/'. $fsec->numSeccion.'/'.$fsec->numFinca)}}" onclick="return confirmar('la seccion','{{$fsec->numSeccion}}')"><i class="material-icons" role="presentation">close</i></a></th>
                </tr>

                @endforeach
            <script src="js/buscador.js"></script>
            </tbody>

        </table>
    </div>
</form>
@stop