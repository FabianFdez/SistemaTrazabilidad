@extends('layouts.app')
@section('content')


 <div>
    <h1 class="titulo" >
        MÓDULO CHEQUEO DE TAREAS
    </h1>
</div>
<div class="container h-50 w-75" style=" ">
    <div class="row">
        <form method="post" action="#" enctype="multipart/form-data">
            <article>
                <center>
                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 "  
                           href="?c=Chequeo&a=preparacion">Preparacion <br> del Terreno</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 "  
                           href="?c=Chequeo&a=siembra">Siembra <br> de Cultivo</a></div>

                    <div class="caja1">
                       <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="?c=Chequeo&a=desCultVeg">Desarrollo Cultivo <br> Vegetativo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="?c=Chequeo&a=desCultRepro">Desarrollo Cultivo <br> Reproductivo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="?c=Chequeo&a=cosecha">Cosecha <br> de Cultivo</a></div>

                    <div class="caja1">
                        <a class="btn btn-outline-dark mt-4 btn-block p-2 " 
                           href="?c=Chequeo&a=posCosecha">Manejo <br> PosCosecha</a></div>

                </center>
            </article>    
        </form>
    </div>
</div>
@stop           