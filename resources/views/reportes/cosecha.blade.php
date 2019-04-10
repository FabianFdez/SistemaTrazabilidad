
@extends('layouts.app')

@section('content')


<div style="background: #0B610B; height: 80px; ">
</div>
<div style="background-image: url(&quot;assets/imagenes/plantita.jpg&quot;); height: 75%;  
     background-repeat: no-repeat; background-position: top center; background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto p-3 animate-in-down">
                <form class="p-4 bg-light" method="post" action="{{url('/saveCosecha')}}">
                    <h4 class="mb-4 text-center">Cosecha de Cultivo</h4>
                       @csrf

                    <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cosechaFruta" value="1" id="uno" onchange="activar(this.checked)">
                                <label class="form-check-label" for="gridCheck1">
                                    Cosecha de la fruta
                                </label>
                            </div>
                         <input class="form-control esti" type="" name="cosechaFrutaObser" placeholder="Observaciones " id="texto" spellcheck="true">  
                    </div>
                       
                    <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="trasladoFruta" value="1"id="dos" disabled onchange="activar2(this.checked)">
                                <label class="form-check-label" for="gridCheck1">
                                    Traslado de la Fruta
                                </label>
                            </div>
                        <input class="form-control esti" type="" name="trasladoFrutaObser" placeholder="Observaciones "id="texto2" spellcheck="true"> 
                    </div>
                    <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"name="ingresoFruta" value="1"id="tres" disabled onchange="activar3(this.checked)">
                                <label class="form-check-label" for="gridCheck1">
                                    Ingreso de la Fruta a la Planta
                                </label>
                            </div>
                        <input class="form-control esti" type="" name="ingresoFrutaObser" placeholder="Observaciones "id="texto3" spellcheck="true"> 
                    </div>


                    <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-" style="background: #ffe633"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
                </form>
            </div>
        </div>
    </div>
</div>
 <script src=" {{ asset('js/cosecha.js') }}"></script>
@stop