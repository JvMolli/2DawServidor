<?php
function headerHtml($nombre){
  $nombree=$nombre;
  echo "<header>
  TIENDA
  $nombree
  <a href='./../index.php'><button>salir</button></a>
  <a href='./../views/cesta.php'><button>Cesta</button></a>
  
  </header>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./../styles.css">
</head>

<body>

  <?php
    if (session_start()) {
      print_r($_SESSION['nombre']);
      headerHtml($_SESSION['nombre']);

    }else {
      echo 'pepe';
    }

  ?>
  <form action="./compra.php">
    <a href="./../controllers/setcoockie.php?num=0">Todos</a>
    <a href="./../controllers/setcoockie.php?num=2">2</a>
    <a href="./../controllers/setcoockie.php?num=4">4</a>
  </form>

  <div class="content">
    <?php 
    print_r($_COOKIE);
  

    ?>
  </div>

</body>

</html>

<?php

$inp = file_get_contents('./../data/datos.json');
$json=json_decode($inp);





?>