<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>


</head>

<body>

  <?php 
      if(isset($_POST['figura'])){
        $figura=$_POST['figura'];
        if($figura==='circulo') header('Refresh: 1; url=./figuras/circulo.php');
        if($figura==='cuadrado') header('Refresh: 1; url=./figuras/cuadrado.php');
        if($figura==='rectangulo') header('Refresh: 1; url=./rectangulo.php');
      }
    ?>


  <form action="./formFiguras.php" method='post'>
    <select name="figura">
      <option value="circulo">Circulo</option>
      <option value="cuadrado">Cuadrado</option>
      <option value="rectangulo">Rectangulo</option>
    </select>
    <br /><br />
    <input type="submit" value="pepetter" />
  </form>
</body>

</html>