<?php

$cosas=json_decode(file_get_contents('./../data/users/cesta.json'));

$total=0;
$pintado="";
for ($i=0; $i <count($cosas) ; $i++) { 
  foreach ($cosas[$i] as $key => $value) {
  if ($key=="precio") {
    $total= $total+$value;
  }else{
    $pintado.="<p>$value</p>";
  }
}
}

 $total;

 

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
    <h1>SU CESTA</h1>
    <h3>Tiene un precio acumulado de:</h3>
    <h5>
      <?php echo $total; echo $pintado;?>
    </h5>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <a href="./../views/compra.php"><button>volver</button></a>

    <a href="./../controllers/confirmados.php"><button>confirmar</button></a>
  </center>
</body>