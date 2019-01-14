<?php

require('./automovil.php');

class coche extends automovil{
    private $tiempos;
    private $tipo;


    function __construct($motor, $matricula,  $tiempos, $tipo) {
        $this->motor .= $motor;
        $this->matricula = $matricula;
        $this->tiempos = $tiempos;
        $this->tipo = $tipo;
        
    }
    
    public function __toString()
    {
        echo 'Este Coche es de la marca ' . $this->marca . ' y modelo ' . $this->modelo . ' y un motor ' . $this->motor . 'de '.$this->tiempos. ' matricula ' . $this->matricula . ', cuyo tipo es ambiental es ' . $tipo ;       
    }
    
    
}