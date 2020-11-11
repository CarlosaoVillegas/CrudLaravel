<?php 

namespace App\Models;

class Cliente {
        private $RFC ="";
        private $Nombre ="";
        private $edad =0;
        private $idciudad = 0;

    public function __construct($RFC,$Nombre,$edad,$idciudad)
    {
        $this->RFC = $RFC;
        $this->Nombre = $Nombre;
        $this->edad = $edad;
        $this->idciudad = $idciudad;
    }
    

    function getRFC(){
        return $this->RFC;
    }
    
    public function getNombre(){
        return $this->Nombre;
    }

    public function getedad(){
        return $this->edad;
    }

    public function getidciudad(){
        return $this->idciudad;
    }
}