<?php
  require('./persona.php');

  $jaime = new Persona("Jaime","Mollinedo");

  $max = new Persona("Maks ", " Dudar");
  $coby = new Persona("Coby ", " Sardinero") ;


  echo $jaime . ' ';
  echo $max . ' ';
  echo $coby;

?>