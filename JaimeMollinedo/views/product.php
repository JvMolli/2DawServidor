<?php

  require './../clases/producto.php';
  $num=file_get_contents('./../data/users/producto');
  $cosas=json_decode(file_get_contents('./../data/datos.json'));
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

  <?php
    product($num, $cosas);
    button($cosas, $num);
  ?>


</body>

</html>


<?php

function product($num, $cosa){
  $paco=$cosa[$num];
  $pepetter = new Producto($paco[4], $paco[0]);
  $pepetter->__toString();
  foreach ($cosa[$num] as $key => $value) {
  if ($key==3) {
     echo "<img src='./../data/$value'>";
          }else{echo "<p> $value </p>";}
        }

}

function button($cosa, $num){
  $paco = $cosa[$num];
  $pepetter = new Producto($paco[4], $paco[0]);
  $cosass=array(
    "id" => $paco[2],
    "precio" => $paco[4]
  );
  $inp = file_get_contents('./../data/users/cesta.json');
  if ($inp) {
    $antiguoJson = json_decode($inp, true);
    array_push($antiguoJson, $cosass);
    file_put_contents( './../data/users/cesta.json', json_encode($antiguoJson));
  }else{
    file_put_contents( './../data/users/cesta.json', json_encode($pepe));
  }

  echo "<a href='./cesta.php'><button>comprar<button></a>";
  
}


?>