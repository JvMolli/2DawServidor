<?php

function headerHtml(){
    echo "<header>
    <center>INICIO DE LA APP</center>
    </header>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./styles.css">
  <title>Document</title>
</head>

<body>

  <?php
       headerHtml();
    ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="content">
    <a href="./controllers/controller.php?name=log">PINCHE AQUI PARA LOGEARSE</a>
    <a href="./controllers/controller.php?name=reg">PINCHE AQUI PARA REGISTRARSE</a>
  </div>



</body>

</html>