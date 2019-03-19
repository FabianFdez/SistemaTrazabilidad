@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <!-- Accion = sino exite un array con una fruta carga la url crear fruta 
                si hay un array carga la url de actualizar-->
            <form class="p-4 bg-light" method="post" action= "{{ !isset($frutas) ? url('/frutas') : url('/frutas/' .$frutas->numFruta) }}">
                @csrf
                <h4 class="mb-4 text-center">
                <!--De igual manera si hay un array carga el titulo Actualizar sino nueva fruta -->
                @if(isset($frutas))
                    Actualizar Fruta 
                    @method('PUT')
                @else
                    Nueva Fruta
                    @method('POST')
                @endif
                
                </h4>
                <!-- Muestra la validadciones si exiten-->
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


                <div class="form-group"> <label>Código Fruta:</label>
                    <!-- carga el id  de la fruta si existe el array sino lo deja en blanco --> 
                    <input class="form-control"  minlength="1" placeholder="Codigo" required=""  name="codigo" value="{{isset($frutas) ? $frutas->codigo : old('codigo')}}" @if(isset($frutas)) readonly="" @endif></div>
                <div class="form-group"> <label>Producto:</label>

                    <!-- carga el nombre  de la fruta si existe el array sino lo deja en blanco -->
                    <input type="text"  minlength="3" class="form-control" placeholder="Producto " required="" name="producto" value="{{isset($frutas) ? $frutas->producto : old('producto')}}"> </div>
                <div class="form-group"> <label>Presentacion:</label>

                    <!-- carga el tipo de la fruta si existe el array sino lo deja en blanco -->
                    <input type="text" minlength="3" class="form-control" placeholder="Presentacion" required="" name="presentacion" value="{{isset($frutas) ? $frutas->presentacion : old('presentacion')}}"> </div>

                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark" ><b>Guardar</b></button>
                <a href="{{url('/frutas')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
@stop