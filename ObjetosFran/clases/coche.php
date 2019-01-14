<?php
require('./automovil.php');


class Coche extends automovil {
    private $puertas;
    private $tipo;

    function __construct($motor, $matricula,$marca, $modelo , $puertas, $tipo ) 
    {
        $this->motor = $motor;
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->puertas = $puertas;
        $this->tipo = $tipo;

    }


    public function __toString()
    {
        echo 'Este Coche es de la marca ' . $this->marca . ' y modelo ' . $this->modelo . ' y un motor ' . $this->motor . ' matricula ' . $this->matricula . ', cuyo tipo es ambiental es ' . $tipo ;       
    }
    
}