@extends('layouts.app')

@section('content')

<div>
    <h1 class="titulo" >
        MÓDULO REPORTES
    </h1>
</div>
                <div class="container h-50 w-75" >
                    <div class="row">
                        <form method="post" action="#" enctype="multipart/form-data">
                            <article>
                                <center>
                                    
                                    <div class="caja3">
                                        <a href="?c=Mapas&a=MostrarReporte">
                                            <img src="iconos/busc.svg"  
                                         title="Mostrar Reporte" hspace="10" vspace="10" align="center" 
                                         style="width:64px; height:64px; " />
                                            <label style="color: black;">Mostrar Reporte</label>
                                        </a>
                                    </div>
                                    
                                    <div class="caja3">
                                        <a href="?c=Mapas&a=ModuloChequeo">
                                            <img src="iconos/lista.svg"  
                                         title="Generar Reporte" hspace="10" vspace="10" align="center" 
                                         style="width:64px; height:64px; " />
                                            <label style="color: black;">Generar Reporte</label>
                                        </a>
                                    </div> 
                                         
                                </center>
                            </article>    
                        </form>
                    </div>
                </div>
            </div>
 @stop