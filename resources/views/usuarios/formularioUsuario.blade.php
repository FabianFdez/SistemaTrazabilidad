@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="post" action="{{ !isset($usuario) ? url('/usuarios') : url('/usuarios/' .$usuario->id) }}">
                @csrf
                 <h4 class="mb-4 text-center">
                <!--De igual manera si hay un array carga el titulo Actualizar sino nueva fruta -->
                @if(isset($usuario))
                    Actualizar Usuario
                    @method('PUT')
                @else
                    Nuevo Usuario
                    @method('POST')
                @endif
                </h4>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> {{session('status')}} </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="form-group"> <label>ID:</label>
                    <input class="form-control" type="number" placeholder="Cédula"  name="id" value="{{isset($usuario) ? $usuario->id : old('id')}}" @if(isset($usuario)) readonly="" @endif> </div>
                <div class="form-group"> <label>Nombre:</label>
                    <input type="text" class="form-control" placeholder="Nombre "  name="nombre"  value="{{isset($usuario) ? $usuario->name : old('nombre')}}"> </div>
                <div class="form-group"> <label>Apellido:</label>
                    <input type="text" class="form-control" placeholder="Apellido"  name="apellido" value="{{isset($usuario) ? $usuario->surname : old('apellido')}}"> </div>
                <div class="form-group"> <label>Usuario:</label>
                    <input type="text" class="form-control" placeholder="Usuario"  name="usuario" id="usuario" value="{{isset($usuario) ? $usuario->usuario : old('usuario')}}"> </div>
                <div class="form-group"> <label>Email:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" readonly="" placeholder="Email"  name="email" id="email" value="{{isset($usuario) ? $usuario->usuario : old('email')}}"> 
                        <input type="text" class="form-control" readonly=""  name="email2" value="@freshdelmonte.com"> 
                    </div>
                </div>
                <div class="form-group"> <label>Contraseña:</label>
                    <input type="password" class="form-control" placeholder="Contraseña"  name="contrasena"  autocomplete="off"> </div>  
                <div class="form-group"> <label>Módulos de Acceso:</label>
                    <select name="manejo" class="form-control">
                        <option  @if(isset($usuario))
                           {{ $usuario->ROLES == ""  ? 'selected' : ''}}
                         @endif value="">Seleccionar</option>
                        <option  @if(isset($usuario))
                            {{ $usuario->ROLES == 'ADMINISTRADOR'  ? 'selected' : ''}}
                         @endif value="ADMINISTRADOR"> ADMINISTRADOR</option>
                        <option @if(isset($usuario))
                            {{ $usuario->ROLES == 'EMPLEADO'  ? 'selected' : ''}}
                         @endif  value="EMPLEADO">COLABORADOR</option>
                    </select>    
                </div> 
                
                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark" ><b>Guardar</b></button>
                <a href="{{url('/usuarios')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
@stop