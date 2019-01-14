<?php
  
  class Persona {
    public $nombre;
    public $apellidos;
    public $sexo;
    public $edad;
    public $telefono;
    public $imagen;
    public $contraseña;

    function __construct($nombre, $apellidos, $sexo, $edad, $telefono, $contraseña, $imagen) {
      $this->nombre = $nombre;
      $this->apellidos = $apellidos;
      $this->sexo = $sexo;
      $this->edad = $edad;
      $this->telefono = $telefono;
      $this->imagen = $imagen;
      $this->contraseña = $contraseña;
  }

//   function getJsonData(){
//     $var = get_object_vars($this);
//     foreach ($var as &$value) {
//         if (is_object($value) && method_exists($value,'getJsonData')) {
//             $value = $value->getJsonData();
//         }
//     }
//     return $var;
// }

    function __toString(){
      return $this->nombre . " " . $this->apellidos . " " . $this->sexo . " " . $this->edad . " " . $this->telefono . " " . $this->contraseña;
  }

  }  

?>