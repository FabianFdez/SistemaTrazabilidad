@extends('layouts.app')
@section('content')


 <div>
    <h1 class="titulo" >
        MÓDULO CHEQUEO DE TAREAS
    </h1>
</div>
@if(session('status'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> {{session('status')}} </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<div class="container h-50 w-75" style=" ">
    <div class="row">
        <form method="post" action="#" enctype="multipart/form-data">
          <center>
            <article style="padding-left: 10%">
                <center>
                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 "  
                           href="{{url('/preparacion')}}">Preparacion <br> del Terreno</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 "  
                           href="{{url('/siembra')}}">Siembra <br> de Cultivo</a></div>

                    <div class="caja1">
                       <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="{{url('/desCultivoVege')}}">Desarrollo Cultivo <br> Vegetativo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="{{url('/desCultivoRepro')}}">Desarrollo Cultivo <br> Reproductivo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="{{url('cosecha')}}">Cosecha <br> de Cultivo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="{{url('manejoPosCosecha')}}">Manejo <br> PosCosecha</a></div>

                </center>
            </article>    
            </center>
        </form>
    </div>
</div>
@stop           