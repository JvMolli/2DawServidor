<?php

require('./figura.php');

class Circulo extends Figura{

  function __toString(){
    return $this->tamaño . " PEPEPEPEPEPEPE" . $this->color;
  }

}

function formCircle(){
  echo "<!DOCTYPE html>
  <head>
    <title>Document</title>
  </head>
  <body>
   <center>
    <form action='circulo.php' method='post'>
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

function paintCircle($tamaño, $color){
  $circulo= new Circulo(0,$color,$tamaño);
  $tamañoC=$circulo->tamaño;
  $colorC=$circulo->color;
  
  echo $circulo->tamaño;

  echo "
    <!DOCTYPE html>
    <head>
      <title>Document</title>
      <style>
        .circulo {
        width: $tamañoC;
        height: $tamañoC;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        background: $colorC;
      }
      </style>
    </head>  
    <body>
    <center>
      <form action='circulo.php' method='post'>
      <p>TAMAÑO</p>
      <input name='tamaño' type='number' max='300'>
        <p>COLOR</p>
        <input name='color' type='color'>
        <input type='submit' value='ok' />
      </form>

      <div class='circulo'> 
      </div>
    </center>
    </body>
    </html>";
}

if(isset($_POST['tamaño'])){
  paintCircle($_POST['tamaño'], $_POST['color']);
}else{
  echo 'pepe';
  formCircle();
}

?>