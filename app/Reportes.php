<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    private $idFinca;

    public function setIdFinca($idFincaw)
    {
    	$this->idFinca = $idFincaw;
    }

    public function getIdFinca(){
    	return $this->idFinca;
    }

}
