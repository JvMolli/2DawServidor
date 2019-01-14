<?php
  
  class Usuario {
    public $nombre;
    public $contraseña;

    function __construct($nombre, $contraseña) {
      $this->nombre = $nombre;
      $this->contraseña = $contraseña;
  }

    function existe_usuario($nombree, $contraseñaa){
        if ($this->nombre==$nombree ) {
            if ( $this->contraseña==$contraseñaa) {
                return true;
            }
        }else {
            return false;
        }
    }

  }  

?>