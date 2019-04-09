<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Reportes;
use App\Seccion;
use App\Preparacion;
use App\Siembra;
use App\DesarrolloCultivoVegetativo;
use App\CultivoReproductivo; 
use App\CosechaCultivo; 
use App\ManejoPosCosecha; 

class ReporteController extends Controller
{ 
    
    private $idSeccion;
    private $idFinca;

    public function __CONSTRUCT() {
        $this->reportes =  new Reportes();
    }

    public function index()
    {
        return view('reportes.selecFinca');  
    }
    
    public function mapaLaCueva()
    {
       session(['idfi' => '36']);
        return view('Mapas.mapaLaCueva');
    }
    
     public function mapaFiladelfia()
    {
        session(['idfi' => '28']);
        return view('Mapas.mapaFiladelfia');
    }
    
     public function mapaMaruca()
    {
        session(['idfi' => '29']);
        return view('Mapas.mapaMaruca');
    }
    
    public function modulo($id)
    {
        session(['idSeccion' => $id]);
        return view('reportes.moduloReportes');
    }
    
    public function menuResportes(){
        return view('reportes.principalChequeo');
    }
    // Preparacion 
    public function preparacion(){
        $ff = session('idfi');
        return $ff;
    }

    public function guardarPreparacion(Request $request){
        $savePreparacion = new Preparacion();
        
        if($request->input('rastra') != null){
            
        $savePreparacion->usuario = Auth::id();
        $savePreparacion->idFinca = session('idfi');
        $savePreparacion->idSeccion = session('idSeccion');
        $savePreparacion->rastra =  $request->input('rastra') == 1 ? 1 : 0;
        $savePreparacion->rastraObservacion =  $request->input('rastraObser');
        $savePreparacion->encamado = $request->input('encamado')== 1 ? 1 : 0;
        $savePreparacion->encamadoObservacion = $request->input('encamadoObser') ;
        $savePreparacion->plastico = $request->input('plastico')== 1 ? 1 : 0;
        $savePreparacion->plasticoObservacion =  $request->input('plasticoObser');
        $savePreparacion->fertilizantes = $request->input('fertilizante')== 1 ? 1 : 0;
        $savePreparacion->fertilizantesObservacion =  $request->input('fertilizanteObser');
        $savePreparacion->mangueras = $request->input('mangueras')== 1 ? 1 : 0;
        $savePreparacion->manguerasObservacion =  $request->input('manguerasObser');
        $seccionEstado = Seccion::where('numFinca','=',session('idfi'))->where('numSeccion','=',session('idSeccion'))->first();
        $seccionEstado->estado = 1;
        $seccionEstado->save();
        $savePreparacion->save();
        return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Preparacion agregado correctamente!!!!');  
         }else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }   
            
        }
       
    public function mostrar(){

    }
    
    public function editarPreparacion(){

    }


    //Preparacion######################################################################################################
    
    //Siembra
     public function siembra(){
        return view('reportes.siembra');
    }

    
    public function guardarSiembra(Request $request){
        $saveSiembra = new Siembra();
        
        if($request->input('barrerCama') != null){
            
        $saveSiembra->usuario = Auth::id();
        $saveSiembra->idFinca = session('idfi'); 
        $saveSiembra->idSeccion =  session('idSeccion');
        $saveSiembra->fruta =  '1';
        //$saveSiembra->fechaEstimada =  ' ';
        $saveSiembra->barreCama =  $request->input('barrerCama')== 1 ? 1 : 0;
        $saveSiembra->barreCamaObservacion =  $request->input('barrerCamaObser');
        $saveSiembra->prensaPlast =  $request->input('prenPlasticos')== 1 ? 1 : 0;
        $saveSiembra->prensaPlastObservacion =  $request->input('prenPlasticosObser');
        $saveSiembra->riego =  $request->input('rieSuelo')== 1 ? 1 : 0;
        $saveSiembra->riegoObservacion =  $request->input('rieSueloObser');
        $saveSiembra->fumigante =  $request->input('fumigante')== 1 ? 1 : 0;
        $saveSiembra->fumiganteObservacion =  $request->input('fumiganteObser');
        $saveSiembra->aplicHerbicida =  $request->input('ApliHerbicida')== 1 ? 1 : 0;
        $saveSiembra->aplicHerbicidaObservacion =  $request->input('ApliHerbicidaObser');
        $saveSiembra->perfPlast =  $request->input('perPlastico')== 1 ? 1 : 0;
        $saveSiembra->perfPlastObservacion =  $request->input('perPlasticoObser');
        $saveSiembra->recolChapita =  $request->input('recChapita')== 1 ? 1 : 0;
        $saveSiembra->recolChapitaObservacion =  $request->input('recChapitaObser');
        $saveSiembra->aplicMaleza   =  $request->input('apliMaleza')== 1 ? 1 : 0;
        $saveSiembra->aplicMalezaObservacion    =  $request->input('apliMalezaObser');
        $saveSiembra->descompacEntrecama =  $request->input('desEntrecama')== 1 ? 1 : 0;
        $saveSiembra->descompacEntrecamaObservacion=  $request->input('desEntrecamaObser');


        $saveSiembra->save();
         return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Siembra agregado correctamente!!!!');
        }  else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }

        
    }

    public function mostrarRepSiembra(){

    }

    public function editarRepSiembra(){

    }

    //siembra#########################################################################################################

    //Desarrollo de Cultivo Vegetativo 
    
     public function desCultivoVege(){
        return view('reportes.desCultivoVege');
    }

    public function guardarDesCultivoVege(Request $request){
        $saveDesCultVege = new DesarrolloCultivoVegetativo();

        if($request->input('trasplante') != null){
        
        $saveDesCultVege->usuario = Auth::id();  
        $saveDesCultVege->idFinca = session('idfi');  
        $saveDesCultVege->idSeccion = session('idSeccion') ;  
        $saveDesCultVege->transplante = $request->input('trasplante')== 1 ? 1 : 0;  
        $saveDesCultVege->transplanteObservacion = $request->input('trasplanteObser');  
        $saveDesCultVege->colocMantaTer = $request->input('colManTermica')== 1 ? 1 : 0;  
        $saveDesCultVege->colocMantaTerObservacion  = $request->input('colManTermicaObser');  
        $saveDesCultVege->fertilizacion = $request->input('fertilizacion')== 1 ? 1 : 0;  
        $saveDesCultVege->fertilizacionObservacion = $request->input('fertilizacionObser');  
        $saveDesCultVege->fumigante = $request->input('contPlagas')== 1 ? 1 : 0; 
        $saveDesCultVege->fumiganteObservacion = $request->input('contPlagasObser');  
        $saveDesCultVege->controlEnfermedad = $request->input('conEnfermedades')== 1 ? 1 : 0;  
        $saveDesCultVege->controlEnfermedadObservacion = $request->input('conEnfermedadesObser');  
        $saveDesCultVege->quitarManta = $request->input('quiManta')== 1 ? 1 : 0;  
        $saveDesCultVege->quitarMantaObservacion = $request->input('quiMantaObser');  

        $saveDesCultVege->save();  
        return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Desarrollo de Cultivo Vegetativo agregado correctamente!!!!');
        }  else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }
        
    }
   //////////////////// CULTIVO REPRODUCTIVO ////////////////////////////////
    
     public function guardarDesCultivoRepro(Request $request){
         
          $saveDesCulRepro = new CultivoReproductivo();

        if($request->input('colCharola') != null){
        
        $saveDesCulRepro->usuario = Auth::id();  
        $saveDesCulRepro->idFinca = session('idfi');  
        $saveDesCulRepro->idSeccion = session('idSeccion') ;  
        $saveDesCulRepro->coloCharola = $request->input('colCharola')== 1 ? 1 : 0;  
        $saveDesCulRepro->coloCharolaObservacion = $request->input('colCharolaObser');  
        $saveDesCulRepro->pintaFruta = $request->input('pintFruta')== 1 ? 1 : 0;  
        $saveDesCulRepro->pintaFrutaObservacion  = $request->input('pintFrutaObser');  
        $saveDesCulRepro->coloColmena = $request->input('colColmena')== 1 ? 1 : 0;  
        $saveDesCulRepro->coloColmenaObservacion = $request->input('colColmenaObser');  
        $saveDesCulRepro->retiroColmena = $request->input('retiColmena')== 1 ? 1 : 0; 
        $saveDesCulRepro->retiroColmenaObservacion = $request->input('retiColmenaObser');  
        $saveDesCulRepro->polinizacion = $request->input('polinizacion')== 1 ? 1 : 0;  
        $saveDesCulRepro->polinizacionObservacion = $request->input('polinizacionObser');  
        $saveDesCulRepro->aplicHormona  = $request->input('apliHormona')== 1 ? 1 : 0;  
        $saveDesCulRepro->aplicHormonaObservacion = $request->input('apliHormonaObser');  
        $saveDesCulRepro->fertilizacion = $request->input('fertilizacion')== 1 ? 1 : 0; 
        $saveDesCulRepro->fertilizacionObservacion = $request->input('fertilizacionObser');  
        $saveDesCulRepro->volteaFruta= $request->input('volFruta')== 1 ? 1 : 0;  
        $saveDesCulRepro->volteaFrutaObservacion = $request->input('volFrutaObser');  
        $saveDesCulRepro->controlPlaga = $request->input('contPlagas')== 1 ? 1 : 0;  
        $saveDesCulRepro->controlPlagaObservacion = $request->input('contPlagasObser');  
        $saveDesCulRepro->controlEnfermedad = $request->input('contEnfermedades')== 1 ? 1 : 0;  
        $saveDesCulRepro->controlEnfermedadObservacion = $request->input('contEnfermedades');  
        $saveDesCulRepro->estimaFruta = $request->input('estiFruta')== 1 ? 1 : 0;  
        $saveDesCulRepro->estimaFrutaObservacion = $request->input('estiFrutaObser');  
        $saveDesCulRepro->raleoFruta = $request->input('raleoFruta')== 1 ? 1 : 0;  
        $saveDesCulRepro->raleoFrutaObservacion = $request->input('raleoFrutaObser');  
        
        $saveDesCulRepro->save();  
        return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Desarrollo de Cultivo Reproductivo agregado correctamente!!!!');
        }  else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }
     }
    
    
    //////////////////////////////// COSECHA //////////////////////////////////
     
     public function guardarCosecha(Request $request){
        $saveCosecha = new CosechaCultivo();

        if($request->input('cosechaFruta') != null){
        
        $saveCosecha->usuario = Auth::id();  
        $saveCosecha->idFinca = session('idfi');  
        $saveCosecha->idSeccion = session('idSeccion') ;  
        $saveCosecha->cosechaFruta = $request->input('cosechaFruta')== 1 ? 1 : 0;  
        $saveCosecha->cosechaFrutaObservacion = $request->input('cosechaFrutaObser');  
        $saveCosecha->trasladoFruta = $request->input('trasladoFruta')== 1 ? 1 : 0;  
        $saveCosecha->trasladoFrutaObservacion = $request->input('trasladoFrutaObser');  
        $saveCosecha->ingresoFruta= $request->input('ingresoFruta')== 1 ? 1 : 0;  
        $saveCosecha->ingresoFrutaObservacion = $request->input('ingresoFrutaObser');  
      
        
        $saveCosecha->save();  
        return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Cosecha de Cultivo  agregado correctamente!!!!');
        }  else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }
        
    }
    
        //////////////////////////////// MANEJO POS COSECHA//////////////////////////////////
   
     public function guardarManejoPosCosecha(Request $request){
        $saveManejoPos = new ManejoPosCosecha();

        if($request->input('retiraPlasticoMangera') != null){
        
        $saveManejoPos->usuario = Auth::id();  
        $saveManejoPos->idFinca = session('idfi');  
        $saveManejoPos->idSeccion = session('idSeccion') ;  
        $saveManejoPos->retiraPlasticoManguera  = $request->input('retiraPlasticoMangera')== 1 ? 1 : 0;  
        $saveManejoPos->retiraPlasticoMangueraObservacion = $request->input('retiraPlasticoMangeraObser');  
        $saveManejoPos->recoleCharola = $request->input('recoleCharola')== 1 ? 1 : 0;  
        $saveManejoPos->recoleCharolaObservacion = $request->input('recoleCharolaObser');  
        $saveManejoPos->retiroMantaTer= $request->input('retiroMantaTer')== 1 ? 1 : 0;  
        $saveManejoPos->retiroMantaTerObservacion = $request->input('retiroMantaTerObser');  
      
        
        $saveManejoPos->save();  
        return redirect()->action('ReporteController@menuResportes')->with('status', 'Reporte de Manejo PosCosecha  agregado correctamente!!!!');
        }  else {
         return redirect()->action('ReporteController@menuResportes')->with('status', 'ERROR, debe seleccionar un ítem!!!!');    
        }
        
    }
    
    
    public function mostrarRepDesCultivoVege(){

    }

    public function editarDesCultivoVege(){

    }

    //Desarrollo de Cultivo Vegetativo################################################################################
    
    public function desCultivoRepro(){
        return view('reportes.desCultivoRepro');
    }
    
    public function cosecha(){
        return view('reportes.cosecha');
    }
    
    public function manejoPosCosecha(){
        return view('reportes.manejoPosCosecha');
    }
    
    
    public function infoMapas(Request $request){
        $id = session('idfi');

        if($request->ajax()){
            $secciones = Seccion::seccionEstados($id);
            return response()->json($secciones);
        }
    }
    

    }