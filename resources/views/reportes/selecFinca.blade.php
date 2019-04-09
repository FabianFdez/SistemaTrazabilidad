@extends('layouts.app')

@section('content')
<div  class="grid-block"  style=" background-image: url(&quot;assets/imagenes/plantita.jpg&quot;); height: 100%; 
      background-repeat: no-repeat;  background-position: top center; background-attachment: fixed;" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto p-3 animate-in-down">
                <form class="p-4 bg-light" method="post" action="POST">
                    <h4 class="mb-4 text-center">Seleccione la Finca</h4>
                    <div style="height: 50px">
                        <a href="{{url('/LaCueva')}}" class="btn btn-outline-dark btn-lg btn-block">La Cueva</a>
                    </div>
                    <div style="height: 50px">
                        <a href="{{url('/Filadelfia')}}" class="btn btn-outline-dark btn-lg btn-block">Filadelfia</a>
                    </div>
                    <div style="height: 50px">
                        <a href="{{url('/Maruca')}}" class="btn btn-outline-dark btn-lg btn-block">Maruca</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop