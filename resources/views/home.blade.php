@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="" style="float: right;">
                <div class="row">
                    <form method="post" action="?c=Inicio" enctype="multipart/form-data">
                        <article>
                            <center>
                                <div class="caja">
                                    <img src="iconos/analytics.svg" width="64px" hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; "/>
                                    <center>   
                                        <a href="{{ url('/reportes')}}" class="btn btn-outline-dark" id="boton">Reportes</a>
                                    </center> 
                                </div>

                                <div class="caja1">
                                    <img src="iconos/plantation.svg"  hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; " />
                                    <center> 
                                        <a href="{{url('/fincas')}}"  class="btn btn-outline-dark">Fincas </a>
                                       
                                    </center>
                                </div>

                                <div class="caja1">
                                    <img src="iconos/trees.svg" width="64px" hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; "/>
                                    <center>  
                                       <a href="{{url('/secciones')}}" class="btn btn-outline-dark">Secciones</a>
                                    </center>
                                </div>

                                <div class="caja1">
                                    <img src="iconos/team.svg" width="64px" hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; "/>
                                    <center>
                                         <a href="{{ url('/usuarios') }} " class="btn btn-outline-dark"> Usuarios</a>
                                    </center> 
                                </div>
                                <div class="caja1" >
                                    <img src="iconos/watermelon.svg" width="64px" hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; "/>
                                    <center> 
                                        <a href="{{ url('/frutas') }} " class="btn btn-outline-dark"> Productos</a>
                                    </center> 
                                </div>

                                <div class="caja1">
                                    <img src="iconos/exit.svg" width="64px" hspace="10" vspace="10" 
                                         align="center" style="width:64px; height:64px; "/>
                                    <center> 
                                       <a class="btn btn-outline-dark" href="{{ url('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }} </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </center>
                                </div>   
                            </center>
                        </article>    
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
