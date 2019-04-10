@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="post" action="{{url('/desCultivoReproductivo')}}">
                
                @csrf
                <h4 class="mb-4 text-center">Desarrollo de Cultivo Reproductivo</h4>
                  
                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="colCharola" id="uno" onchange="activar(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Colocación de Charola
                            </label>
                        </div>
                    <input class="form-control esti" type="" name="colCharolaObser" placeholder="Observaciones " id="texto" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pintFruta" value="1" id="dos" disabled onchange="activar2(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Pintado de Fruta
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="pintFrutaObser" placeholder="Observaciones "id="texto2" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="colColmena" value="1" id="tres" disabled onchange="activar3(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Colocación de la Colmena
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="colColmenaObser" placeholder="Observaciones " id="texto3" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="retiColmena" value="1" id="cuatro" disabled onchange="activar4(this.checked)" >
                            <label class="form-check-label" for="gridCheck1">
                                Retiro de la Colmena
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="retiColmenaObser" placeholder="Observaciones "id="texto4" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="polinizacion" value="1" id="cinco" disabled onchange="activar5(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Polinización
                            </label>
                        </div>
                      <input class="form-control esti" type="" name="polinizacionObser" placeholder="Observaciones "id="texto5" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="apliHormona" value="1"id="seis" disabled onchange="activar6(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Aplicación de Hormona
                            </label>
                        </div>
                    <input class="form-control esti" type="" name="apliHormonaObser" placeholder="Observaciones "id="texto6" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"name="fertilizacion" value="1" id="siete" disabled onchange="activar7(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Fertilización
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="fertilizacionObser" placeholder="Observaciones "id="texto7" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="volFruta" value="1" id="ocho" disabled onchange="activar8(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Volteo de la Fruta
                            </label>
                        </div>
                      <input class="form-control esti" type="" name="volFrutaObser" placeholder="Observaciones "id="texto8" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="contPlagas" value="1"id="nueve" disabled onchange="activar9(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Control de Plaga
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="contPlagaObser" placeholder="Observaciones "id="texto9" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="contEnfermedades" value="1" id="diez" disabled onchange="activar10(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Control de Enfermedades
                            </label>
                        </div>
                  <input class="form-control esti" type="" name="contEnfermedadesObser" placeholder="Observaciones "id="texto10" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="estiFruta" value="1" id="once" disabled onchange="activar11(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Estimación de la Fruta
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="estiFrutaObser" placeholder="Observaciones "id="texto11" spellcheck="true">  
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="raleoFruta" value="1" id="doce" disabled onchange="activar12(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Raleo de la Fruta
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="raleoFrutaObser" placeholder="Observaciones "id="texto12" spellcheck="true">  
                    
                </div>
                    <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-" style="background: #ffe633"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
<script src=" {{ asset('js/desCultRepro.js') }}"></script>
@stop