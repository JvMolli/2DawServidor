<?php

class automovil{
    protected $marca;
    protected $modelo;
    protected $motor;
    protected $matricula;
    
    function __construct($motor, $matricula, $marca, $modelo) {
    
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->motor = $motor;
        $this->matricula = $matricula;
    }


}