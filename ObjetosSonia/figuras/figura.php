<?php

abstract class Figura{
  public $vertices;
  public $color;
  public $nombre;
  public $tamaño;

  function __construct($vertices, $color, $tamaño){
    $this->vertices=$vertices;
    $this->color=$color;
    $this->tamaño=$tamaño;
  }
}