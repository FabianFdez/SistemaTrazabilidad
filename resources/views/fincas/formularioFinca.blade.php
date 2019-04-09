@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <!-- Accion = sino exite un array con una fruta carga la url crear fruta 
                si hay un array carga la url de actualizar-->
            <form class="p-4 bg-light" method="post" action= "{{ !isset($fincas) ? url('/fincas') : url('/fincas/' .$fincas->numFinca) }}">
                @csrf
                <h4 class="mb-4 text-center">
                <!--De igual manera si hay un array carga el titulo Actualizar sino nueva finca -->
                @if(isset($fincas))
                    Actualizar Finca
                    @method('PUT')
                @else
                    Nueva Finca
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

                    <div class="form-group"> <label for="NumFinca">ID:</label>
                        <select name="numFinca" class="form-control">
                            <option  @if(isset($fincas)) {{ $fincas->numFinca == '' ? 'selected' : ''}} @endif value=""> Seleccionar</option>
                            <option @if(isset($fincas)) {{ $fincas->numFinca == '29' ? 'selected' : ''}} @endif value="29"> 29</option>
                            <option @if(isset($fincas)) {{ $fincas->numFinca == '36' ? 'selected' : ''}} @endif value="36"> 36</option>
                            <option @if(isset($fincas)) {{ $fincas->numFinca == '28' ? 'selected' : ''}} @endif value="28"> 28</option>
                        </select>
                    </div>
                    <div class="form-group"> <label>Finca:</label>
                        <input type="text" class="form-control" placeholder="Nombre " required="" name="nombre" value="{{isset($fincas) ? $fincas->nombre : old('nombre')}}"> </div>
                <div class="form-group"> <label for="Area">Area (Ha) :</label>
                        <select name="area" class="form-control">
                            <option  @if(isset($fincas)) {{ $fincas->area == '' ? 'selected' : ''}} @endif value=""> Seleccionar</option>
                            <option @if(isset($fincas)) {{ $fincas->area == '151' ? 'selected' : ''}} @endif value="151"> 151</option>
                            <option @if(isset($fincas)) {{ $fincas->area == '545' ? 'selected' : ''}} @endif value="650"> 650</option>
                            <option @if(isset($fincas)) {{ $fincas->area == '446' ? 'selected' : ''}} @endif value="446"> 446</option>
                        </select>
                    </div>
                    <div class="form-group"> 
                        <label for="Ubicación"> Ubicación:</label>
                        <select name="ubicacion" class="form-control">
                            <option  @if(isset($fincas)) {{ $fincas->ubicacion == '' ? 'selected' : ''}} @endif value=""> Seleccionar</option>
                            <option @if(isset($fincas)) {{ $fincas->ubicacion == 'Liberia (Guancaste)' ? 'selected' : ''}} @endif value="Liberia (Guanacaste)"> Liberia (Guanacaste)</option>
                            <option @if(isset($fincas)) {{ $fincas->ubicacion == 'Esparza (Puntarenas)' ? 'selected' : ''}} @endif value="Esparza (Puntarenas)"> Esparza (Puntarenas)</option>
                            <option @if(isset($fincas)) {{ $fincas->ubicacion == 'Filadelfia (Guanacaste)' ? 'selected' : ''}} @endif value="Filadelfia (Guanacaste)"> Filadelfia (Guanacaste)</option>
                        </select>
                    </div>
                        
          <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark" ><b>Guardar</b></button>
                <a href="{{url('/fincas')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
@stop
