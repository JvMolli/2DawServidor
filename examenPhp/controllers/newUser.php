<?php
require('./persona.php');

$test=true;
echo '>>>>>>>>>>>>>>>>>>>>>>>>>>';
var_dump($_FILES['image']);
  
if (!isset($_POST['nombre']) || (strlen($_POST['nombre'])<5)) {
  $test=false;
  header ('Refresh: 5; url=./../views/register.php');
  echo "<h2>Su nombre debe de ser mayor a 5 caracteres<h2>";
  
}
if (!isset($_POST['apellidos']) || (strlen($_POST['apellidos'])<5)) {
  $test=false;
  header ('Refresh: 5; url=./../views/register.php');
  echo "<h2>Su apellido debe de ser mayor a 5 caracteres<h2>";
}
if (!isset($_POST['telefono']) || (strlen($_POST['telefono'])<9)) {
  $test=false;
  header ('Refresh: 5; url=./../views/register.php');
  echo "<h2>Su telefono debe de ser correcto<h2>";
}

if (isset($_POST['contraseña']) && isset($_POST['REcontraseña']) && (strlen($_POST['contraseña'])>5) ) {
  if($_POST['contraseña']!=$_POST['REcontraseña']) {
    $test=false;
    header ('Refresh: 5; url=./../views/register.php');
    echo "<h2>Sus contraseñas deben ser iguales<h2>";
  }
}else{
  $test=false;
  header ('Refresh: 5; url=./../views/register.php');
  echo "<h2>Sus contraseñas deben ser iguales y tener una lingitud mayor a 5<h2>";
}

// echo $_FILES['image']['tmp_name'];

// if(is_uploaded_file($_FILES['image']['tmp_name'])) echo 'imagennnnn';

if($test){
  $persona = new Persona($_POST['nombre'], $_POST['apellidos'], $_POST['sexo'], $_POST['edad'], $_POST['telefono'], $_POST['contraseña'], $_FILES['image']['name']);
  // $data[]=array();
  // $json = json_encode( $persona ) . "]";
  $pepe= (array)$persona;
  $inp = file_get_contents('./../data/data.json');
  if ($inp) {
    $antiguoJson[] = json_decode($inp, true);
    array_push($antiguoJson, $pepe);
    file_put_contents( './../data/data.json', json_encode($antiguoJson));
  }else{
    file_put_contents( './../data/data.json', json_encode($pepe));
  }
  header ('Refresh: 5; url=./../index.html');
  echo "REGISTRADO USUARIO: <br>";
  foreach ($pepe as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
}

?>