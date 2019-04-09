@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">

            <form class="p-4 bg-light" method="post" action= "{{ !isset($seccion) ? url('/secciones') : url('/secciones/update/' .$seccion->numSeccion). '/'. $seccion->numFinca  }}">
                @csrf
                <h4 class="mb-4 text-center">
                    <!--De igual manera si hay un array carga el titulo Actualizar sino nueva seccion -->
                    @if(isset($seccion))
                    Actualizar Sección
                    @method('POST')
                    @else
                    Nueva Sección
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

                <div class="form-group"> <label>ID Sección:</label>
                    <input class="form-control" type="number" name="numSeccion" placeholder="ID Seccion" required=""  value="{{isset($seccion) ? $seccion->numSeccion : old('numSeccion')}}" @if(isset($seccion)) readonly="" @endif> </div>
                <div class="form-group">
                    <label for="numFinca"> Seleccione Finca:</label>
                    @if(isset($fincas))
                    <select name='numFinca'class="form-control">
                        @foreach($fincas as  $finca)
                        <option value=" {{ $finca->numFinca }}" > {{$finca -> nombre}} </option>
                        @endforeach
                        </select> 
                        @elseif(isset($finc))
                        <select name="numFinca" class="form-control" disabled="">
                        @foreach($finc as  $fin)
                        <option @if(isset($seccion)) {{ $seccion->numFinca == $fin->numFinca  ? 'selected' : ''}} @endif value="{{$fin ->numFinca}}" > {{$fin -> nombre}} </option>
                        @endforeach
                    </select>
                    @endif
                </div>
                <div class="form-group"> <label>Area (Ha):</label>
                    <input type="text" class="form-control" placeholder="Area" required="" name="area"  value="{{isset($seccion) ? $seccion->area :  old('area')}}"> </div>

                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark" ><b>Guardar</b></button>
                <a href="{{url('/volver')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
@stop
