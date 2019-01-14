<?php
  
  if(file_exists("movies.xml")){
    $xmlFile = @simplexml_load_file("movies.xml");
    if (!empty($_POST['titulo'])) {
      $movie = $xmlFile->addChild('movie');
      $titulo=$movie->addChild('titulo', $_POST['titulo']);
      if (!empty($_POST['img'])) $titulo->addAttribute('img', $_POST['img']);
      elseif (empty($_POST['img'])) $titulo->addAttribute('img', 'https://vignette.wikia.nocookie.net/shokugekinosoma/images/6/63/Imagen_no_disponible.png/revision/latest?cb=20180528092945&path-prefix=es');
      if (!empty($_POST['descripcion'])){
      $movie->addChild('descripcion', $_POST['descripcion']);
      } elseif (empty($_POST['descripcion'])) {$movie->addChild('descripcion', 'No disponemos todavia de descripcion');}
      $xmlFile->asXML("movies.xml");

    }elseif(empty($_POST['titulo']) && (!empty($_POST['descripcion']) || !empty($_POST['img'])) ) {
      echo 'Para meter una nueva peli necesitas darle un tittulo.<br> ';
    }
   
  }else{
    $xmlFile = new SimpleXMLElement("<movies></movies>");
    $xmlFile->asXML("movies.xml");
    if (isset($_POST['titulo'])) {
      $movie = $xmlFile->addChild('movie');
      $movie->addChild('titulo', $_POST['titulo']);
      $movie->addChild('titulo', $_POST['descripcion']);
      $xmlFile->asXML("movies.xml");

    }
  }
  
 

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>


  <center>
    <h1>TUS PELIS</h1>

    <form action="index.php" method="post">
      <h3>Titulo de tu nueva peli</h3>
      <input type="text" name="titulo">
      <h4>Intruduzca descripcion</h4>
      <input type="text" name="descripcion">
      <h4>Url de su imagen</h4>
      <input type="text" name="img"><br><br>
      <input type="submit" value='ok'>
    </form>



    <div>

      <?php

     foreach ($xmlFile->movie as $movies => $atributos) {
      $titulo=$atributos->titulo;
      echo "<h2>$titulo</h2>";
      foreach ($atributos as $cosas => $susatb) {
        if ($susatb->attributes()['img']) {
          $imagen=$susatb->attributes()['img'];
          echo "<img src='$imagen' width='250' heigth='250'>";
          }
        }
      $des=$atributos->descripcion;
      echo "<p>$des</p>";
      }
 
      header ("Cache-Control: no-cache, must-revalidate");

    ?>

    </div>


  </center>

</body>

</html>