@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="POST" action="{{url('/saveSiembra')}}">
                 @csrf
                <h4 class="mb-4 text-center">Siembra</h4>

                <div class="form-group"> <label>Fruta</label>
                    <select name="manejo" class="form-control">
                        <option  value="0">Seleccionar Fruta</option>
                    </select>  
                </div>

                <div class="form-group">
                    <label>Fecha Estimada de Siembra</label>
                    <div class="date">
                        <script>
                            var f = new Date();
                            document.write(f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
                        </script>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="barrerCama" id="uno" onchange="activar(this.checked)">
                            <label class="form-check-label" for="gridCheck1" >
                                Barrer las Camas
                            </label>
                    </div>
                   <input class="form-control esti" type="" name="barrerCamaObser" placeholder="Observaciones " id="texto" spellcheck="true"> 
                </div>

                <div class="form-group">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="prenPlasticos" value="1" id="dos" disabled onchange="activar2(this.checked)" >
                            <label class="form-check-label" for="gridCheck1">
                                Prensado de Plástico
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="prenPlasticosObser" placeholder="Observaciones " id="texto2" spellcheck="true">
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="rieSuelo" value="1" id="tres" disabled onchange="activar3(this.checked)" >
                            <label class="form-check-label" for="gridCheck1">
                                Riego de Suelo
                            </label>
                        </div>
                     <input class="form-control esti" type="" name="rieSueloObser" placeholder="Observaciones "id="texto3" spellcheck="true">
                </div>

                <div class="form-group">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="fumigante" value="1" id="cuatro" disabled onchange="activar4(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Fumigante
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="fumiganteObser" placeholder="Observaciones " id="texto4" spellcheck="true">
                </div>

                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ApliHerbicida" value="1" id="cinco" disabled onchange="activar5(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Aplicación de Herbicida
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="ApliHerbicidaObser" placeholder="Observaciones " id="texto5" spellcheck="true">
                </div>
                <div class="form-group">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="perPlastico" value="1" id="seis" disabled onchange="activar6(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Perforado de Plástico
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="perPlasticoObser" placeholder="Observaciones " id="texto6" spellcheck="true">
                </div>
                <div class="form-group ">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="recChapita" value="1" id="siete" disabled onchange="activar7(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Recolección de Chapita
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="recChapitaObser" placeholder="Observaciones " id="texto7" spellcheck="true">
                </div>
                <div class="form-group">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="apliMaleza" value="1" id="ocho" disabled onchange="activar8(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Aplicación de Maleza
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="apliMalezaObser" placeholder="Observaciones " id="texto8" spellcheck="true">
                </div>

                <div class="form-group">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="desEntrecama" value="1" id="nueve" disabled onchange="activar9(this.checked)">
                            <label class="form-check-label" for="gridCheck1">
                                Descompactar Entrecama
                            </label>
                    </div>
                    <input class="form-control esti" type="" name="desEntrecamaObser" placeholder="Observaciones " id="texto9" spellcheck="true">
                </div>
                
                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-"  style="background: #ffe633"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
  <script src=" {{ asset('js/siembra.js') }}"></script>
@stop