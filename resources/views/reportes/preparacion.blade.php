@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="POST" action="{{url('/savePreparacion')}}">
                @csrf
                <h4 class="mb-4 text-center">Preparación</h4>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value='1' name="rastra" id="uno" onchange="activar(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Rastra
                            </label>
                        </div>
                    <input  class="form-control esti" type="" name="rastraObser" placeholder="Observaciones" id="texto" spellcheck="true">
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input disabled onchange="activar2(this.checked)" class="form-check-input" type="checkbox" id="dos" value='1' name="encamado">
                            <label class="form-check-label" for="gridCheck1">
                                Encamado
                            </label>
                        </div>
                        <input class="form-control esti" spellcheck="true" type="" name="encamadoObser" placeholder="Observaciones" id="texto2" >
                </div>


               <div class="form-group">
                        <div class="form-check">
                            <input disabled onchange="activar3(this.checked)" class="form-check-input" type="checkbox" id="tres" value='1' name='plastico' >
                            <label class="form-check-label" for="gridCheck1">
                                Plástico
                            </label>
                        </div>
                    <input class="form-control esti" type="" name="plasticoObser" placeholder="Observaciones " spellcheck="true" id="texto3">
                </div>

               <div class="form-group">
                        <div class="form-check">
                            <input disabled onchange="activar4(this.checked)" id="cuatro" class="form-check-input" type="checkbox" value="1" name='fertilizante'>
                            <label class="form-check-label" for="gridCheck1">
                                Fertilizante
                            </label>
                        </div>
                    <input class="form-control esti" type="" name="fertilizaObser" placeholder="Observaciones " spellcheck="true" id="texto4">
                </div>


                <div class="form-group">
                        <div class="form-check">
                            <input disabled onchange="activar5(this.checked)" id="cinco" class="form-check-input " type="checkbox"  value="1" name="mangueras">
                            <label class="form-check-label" for="gridCheck1">
                                Manguera
                            </label>
                        </div>
                    <input class="form-control esti" type="" name="manguerasObser" placeholder="Observaciones " spellcheck="true" id="texto5">
                </div>


                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-dark"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
                
            </form>
        </div>
    </div>
</div>

        <script src=" {{ asset('js/preparacion.js') }}"></script>
@stop