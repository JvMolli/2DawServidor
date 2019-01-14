<?php

  class Persona {

    public $nombre;
    public $apellidos;
    static $id=1;
    public $idP;
    function __construct($nombre, $apellidos){
      $this->nombre=$nombre;
      $this->apellidos=$apellidos;
      $this->idP=Persona::$id;
      Persona::$id =Persona::$id+1;

    }

    function __toString(){
      return $this->nombre . " " . $this->apellidos . " Id: " . $this->idP;
    }

    


  }


?>