<?php
  
class Producto {
  public $id;
  public $nombre;

  function __construct($nombre, $id) {
    $this->nombre = $nombre;
    $this->id = $id;
}

  function __toString(){
      echo "Su producto tiene un precio de es: " . $this->nombre;
  }

}  



?>>