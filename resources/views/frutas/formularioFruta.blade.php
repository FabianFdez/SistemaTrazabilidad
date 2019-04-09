@extends('layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <!-- Accion = sino exite un array con una fruta carga la url crear fruta 
                si hay un array carga la url de actualizar-->
            <form class="p-4 bg-light" method="post" action= "{{ isset($frutas)  ? url('/updatefrutas/' .$frutas->numFruta)  : url('/frutas') }}">
                @csrf
                <h4 class="mb-4 text-center">
                <!--De igual manera si hay un array carga el titulo Actualizar sino nueva fruta -->
                @if(isset($frutas))
                    Actualizar Fruta 
                    @method('POST')
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
                    <select name="producto" class="form-control">
                        <option  @if(isset($frutas)) {{ $frutas->producto == '' ? 'selected' : ''}} @endif value=""> Seleccionar</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Haper' ? 'selected' : ''}} @endif value="Haper"> Haper</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Honey Dew (HD)' ? 'selected' : ''}} @endif value="Honey Dew (HD)"> Honey Dew (HD)</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Yellow Honey Dew (YHD)' ? 'selected' : ''}} @endif value="Yellow Honey Dew (YHD)"> Yellow Honey Dew (YHD)</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Watermelon Regular (WMR)' ? 'selected' : ''}} @endif value="Watermelon Regular (WMR)">Watermelon Regular (WMR)</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Watermelon Personal (WMP)' ? 'selected' : ''}} @endif value="Watermelon Personal (WMP)"> Watermelon Personal (WMP)</option>
                        <option @if(isset($frutas)) {{ $frutas->producto == 'Yellow Watermelon (YWM)' ? 'selected' : ''}} @endif value="Yellow Watermelon (YWM)"> Yellow Watermelon (YWM)</option>
                    </select>
                    </div>
                  
                
                    <div class="form-group"> <label>Presentación:</label>
                    <select name="presentacion" class="form-control">
                        <option  @if(isset($frutas)) {{ $frutas->presentacion == '' ? 'selected' : ''}} @endif value=""> Seleccionar</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'Haper US' ? 'selected' : ''}} @endif value="Haper US"> Haper US</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'Haper JP' ? 'selected' : ''}} @endif value="Haper JP"> Haper JP</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'Platinum UE' ? 'selected' : ''}} @endif value="Platinum UE"> Platinum UE</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'Honey Dew US' ? 'selected' : ''}} @endif value="Honey Dew US"> Honey Dew US</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'YHD US' ? 'selected' : ''}} @endif value="YHD US"> YHD US</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'YHD UE' ? 'selected' : ''}} @endif value="YHD UE"> SYHD UE</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'WMR US' ? 'selected' : ''}} @endif value="WMR US"> WMR US</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'WMR UE' ? 'selected' : ''}} @endif value="WMR UE"> WMR UE</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'WMP US' ? 'selected' : ''}} @endif value="WMP US"> WMP US</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'WMP UE' ? 'selected' : ''}} @endif value="WMP UE"> WMP UE</option>
                        <option @if(isset($frutas)) {{ $frutas->presentacion == 'YWM US' ? 'selected' : ''}} @endif value="YWM US"> YWM US</option>
                    </select>
                    </div>
                    
                    
                    
                    
                    
                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark" ><b>Guardar</b></button>
                <a href="{{url('/frutas')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
@stop