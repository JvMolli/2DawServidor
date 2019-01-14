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
  <header><img class="logo" src="../data/logo.jpg" /></header>
  <div class="content">
    <form action="../controllers/newUser.php" class="formReg" method="post" enctype="multipart/form-data">
      <label for="">Nombre</label> <input type="text" name="nombre" /><br />
      <label for="">Apellidos</label>
      <input type="text" name="apellidos" /><br />
      <select name="sexo" id="">
        <option value="masculino">M</option>
        <option value="femenino">F</option>
      </select><br />
      <label for="">Edad</label>
      <input type="number" min="18" max="105" name="edad" /><br />
      <label for="">Telefono</label>
      <input type="text" name="telefono" /><br />
      <label for="">Añade tu foto</label>
      <input type="file" name="image" /><br />
      <label for="">Contraseña</label>
      <input type="text" name="contraseña" /><br />
      <label for="">Repite Contraseña</label>
      <input type="text" name="REcontraseña" /><br />
      <input type="submit" name="ok" value="OK" /><br />
    </form>
  </div>
</body>

</html>