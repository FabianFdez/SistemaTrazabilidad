@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto p-3 animate-in-down">
            <form class="p-4 bg-light" method="post" action="{{url('/desarrolloCultivoVegetativo')}}">
                @csrf
                <h4 class="mb-4 text-center">Desarrollo de Cultivo Vegetativo</h4>



                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="trasplante"   value="1" id="uno" onchange="activar(this.checked), showContent();">
                        <label class="form-check-label" for="gridCheck1">
                            Transplante
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="trasplanteObser" placeholder="Observaciones " id="texto" spellcheck="true">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="colManTermica"  value="1" id="dos" onchange="activar2(this.checked), showContent2();">
                        <label class="form-check-label" for="gridCheck1">
                            Colocación de Manta Termica
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="colManTermicaObser" placeholder="Observaciones " id="texto2" spellcheck="true">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="fertilizacion"  value="1" id="tres" onchange="activar3(this.checked), showContent3();">
                        <label class="form-check-label" for="gridCheck1">
                            Fertilización
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="fertilizacionObser" placeholder="Observaciones "id="texto3" spellcheck="true">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="contPlagas"  value="1"id="cuatro" onchange="activar4(this.checked), showContent4();">
                        <label class="form-check-label" for="gridCheck1">
                            Control de Plagas
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="contPlagasObser" placeholder="Observaciones "id="texto4" spellcheck="true">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="conEnfermedades"  value="1"id="cinco" onchange="activar5(this.checked), showContent5();">
                        <label class="form-check-label" for="gridCheck1">
                            Control de Enfermedades
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="conEnfermedadesObser" placeholder="Observaciones " id="texto5" spellcheck="true">
                </div>


                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="quiManta"  value="1" id="seis" onchange="activar6(this.checked), showContent6();">
                        <label class="form-check-label" for="gridCheck1">
                            Quitar Manta
                    </label>
                    </div>
                    <input class="form-control esti" type="" name="quiMantaObser" placeholder="Observaciones "id="texto6" spellcheck="true">
                </div>



                <button type="submit" class="btn mt-4 btn-block p-2 btn-outline-" style="background: #ffe633"><b>Guardar</b></button>
                <a href="{{url('/principalReportes')}}" type="button" class="btn mt-4 btn-block p-2 btn-outline-dark" > <b>Cancelar</b> </a>
            </form>
        </div>
    </div>
</div>
 <script src=" {{ asset('js/desCultVeg.js') }}"></script>
 
@stop