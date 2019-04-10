@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="post" action="{{url('/saveManejoPos')}}">
                <h4 class="mb-4 text-center">Manejo de PosCosecha</h4>
                @csrf

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="retiraPlasticoMangera" value="1"id="uno" onchange="activar(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Retiro de Manguera Plástica
                            </label>
                        </div>
                  <input class="form-control esti" type="" name="retiraPlasticoMangeraObser" placeholder="Observaciones "id="texto" spellcheck="true"> 
                </div>
                
                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="recoleCharola" value="1" id="dos" disabled onchange="activar2(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Recoleccion de Charola
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="recoleCharolaObser" placeholder="Observaciones "id="texto2" spellcheck="true"> 
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="retiroMantaTer" value="1"id="tres" disabled onchange="activar3(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Retiro de Manta Termica
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="retiroMantaTerObser" placeholder="Observaciones "id="texto3" spellcheck="true"> 
                </div>

                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-" style="background: #ffe633"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
<script src=" {{ asset('js/posCosecha.js') }}"></script>
@stop