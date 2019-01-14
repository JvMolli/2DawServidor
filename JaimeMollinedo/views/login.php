<?php
    require './../clases/usuario.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="./../styles.css" />
</head>

<body>
  <header><img class="logo" /></header>

  <div class="content">
    <h3>Por favor introduzca su nombre y contraseña</h3>
    <form action="./../controllers/login.php" class="formReg" method="get">
      <label for="">Nombre</label>
      <input type="text" name="nombre" /><br />
      <label for="">contraseña</label>
      <input type="text" name="contraseña" /><br />
      <input type="submit" value="logIn" />
    </form>
  </div>
</body>

</html>