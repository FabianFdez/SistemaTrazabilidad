<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'seccion';
    protected $primaryKey = 'numSeccion';


     public static function seccionEstados($id){
        return Seccion::where('numFinca','=',$id)->get();
    }
}
