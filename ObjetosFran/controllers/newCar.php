<?php

$test=true;

 
if (!session_start()) {
  header ('Refresh: 1; url=./../index.php');
}

if (!isset($_POST['titulo']) || (strlen($_POST['titulo'])<5)) {
  $test=false;
  header ('Refresh: 5; url=./../views/publicar.html');
  echo "<h2>Su titulo debe de ser mayor a 5 caracteres<h2>";
  
}
if (!isset($_POST['matricula']) || (strlen($_POST['matricula'])<5)) {
  $test=false;
  header ('Refresh: 5; url=./../views/publicar.html');
  echo "<h2>Su matricula debe de ser mayor a 5 caracteres<h2>";
}


// echo $_FILES['image']['tmp_name'];

// if(is_uploaded_file($_FILES['image']['tmp_name'])) echo 'imagennnnn';

if($test){
  //$coche = new Coche($_POST['nombre'], $_POST['apellidos'], $_POST['sexo'], $_POST['edad'], $_POST['telefono'], $_POST['contraseña'], $_FILES['image']['name']);
 
  $anuncio = Array
(
    "id"=>1,
    "titulo" => $_POST["titulo"],
    "marca" => $_POST["marca"],
    "modelo" => $_POST["modelo"],
    "motor" => $_POST["motor"],
    "matricula" => $_POST["matricula"],
    "image" => $_FILES['image']['name'],
    "puertas" => $_POST["puertas"],
    "tipo"=>$_POST["tipo"],
);

  //$pepe= (array)$persona;
  $inp = file_get_contents('./../data/anuncios/data.json');
  if ($inp) {
    $antiguoJson = json_decode($inp, true);
    array_push($antiguoJson, $anuncio);
    file_put_contents( './../data/anuncios/data.json', json_encode($antiguoJson, true));
  }else{
    file_put_contents( './../data/anuncios/data.json', json_encode($anuncio, true));
  }
  header ('Refresh: 5; url=./../index.html');
  echo "REGISTRADO USUARIO: <br>";
  foreach ($anuncio as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
}

?>