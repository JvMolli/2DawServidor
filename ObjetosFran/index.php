<?php
if (session_start()) {
$id=$_GET['id'];
echo $id;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css" />
</head>

<body>
  <header>
    <img class="logo" src="./data/logo.jpg" />
    <a href="./views/login.html"><button class="button">LogIn</button></a>
    <a href="./views/register.php"><button class="button">Registrer</button>
    </a>
    <a href="./views/publicar.html">
      <button class="button">Publica</button>
    </a>
  </header>

  <div class="content">
    <h2>BIENVENIDO A COCHES PEPETTER</h2>
    <form action="./controllers/search.php" method="POST">
      <label for="">Busque su anuncio</label>
      <input type="text" name="buscar" />
    </form>
  </div>
</body>

</html>