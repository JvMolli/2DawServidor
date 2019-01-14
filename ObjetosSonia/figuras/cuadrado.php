<?php

require('./figura.php');

class Cuadrado extends Figura{

  function __toString(){
    return $this->tamaño . " PEPEPEPEPEPEPE" . $this->color;
  }

}

function formCuadrado(){
  echo "<!DOCTYPE html>
  <head>
    <title>Document</title>
  </head>
  <body>
   <center>
    <form action='cuadrado.php' method='post'>
      <p>TAMAÑO</p>
      <input name='tamaño' type='number' max='300'>
      <p>COLOR</p>
      <input name='color' type='color'>
      <input type='submit' value='ok' />
    </form>
    </center>
  </body>
  </html>";
}

function paintCuadrado($tamaño, $color){
  $cuadrado= new Cuadrado(0,$color,$tamaño);
  $tamañoC=$cuadrado->tamaño;
  $colorC=$cuadrado->color;
  echo $cuadrado->tamaño;
  echo "
    <!DOCTYPE html>
    <head>
      <title>Document</title>
      <style>
      .cuadrado {
        width: $tamaño; 
        height: $tamaño; 
        background: $colorC;
       }
   
      </style>
    </head>  
    <body>
    <center>
      <form action='cuadrado.php' method='post'>
      <p>TAMAÑO</p>
      <input name='tamaño' type='number' max='300'>
        <p>COLOR</p>
        <input name='color' type='color'>
        <input type='submit' value='ok' />
      </form>

      <div class='cuadrado'> 
      </div>
    </center>
    </body>
    </html>";
}

if(isset($_POST['tamaño'])){
  paintCuadrado($_POST['tamaño'], $_POST['color']);
}else{
  echo 'pepe';
  formCuadrado();
}

?>