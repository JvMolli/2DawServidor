<?php
require('./cook.php');
/* $idioma = $_POST["idioma"];
 $fuente = $_POST["fuente"]; 
 $fondo = $_POST["fondo"];*/

 if(isset($_COOKIE["preferencias"])) {
     $prefCoockie = $_COOKIE["preferencias"];
     $configuracion = array( "idioma" => $prefCoockie["idioma"], "fuente" => $prefCoockie["fuente"], "fondo" => $prefCoockie["fondo"]);
    }
 if(!isset($configuracion))$configuracion =array( "idioma" => "Español", "fuente" => "black", "fondo" => "white");
 if (isset($_POST["idioma"]) && isset($_POST["fuente"]) && isset($_POST["fondo"])) {
    // setcookie('Fecha',date('Y-m-d H:i:s'),time()+3600);
     setcookie('preferencias[idioma]',$_POST["idioma"],time()+3600);
     setcookie('preferencias[fuente]',$_POST["fuente"],time()+3600);
     setcookie('preferencias[fondo]',$_POST["fondo"],time()+3600);

     $configuracion = array( "idioma" => $_POST["idioma"], "fuente" => $_POST["fuente"], "fondo" =>  $_POST["fondo"]);
 }

 function lengua($letra){
    echo "<center><h3>
    $letra
    </h3></center>";
 }
 
 function colorFondo($preferencias){
     $color = $preferencias;
     return "<style> 
     body{
         background-color: $color
     }
     </style>";
 }

 function fuente($preferencias){
     $color = $preferencias;
     return "<style> 
     body form{
         color: $color
     }
     </style>";
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?= colorFondo($configuracion["fondo"])?>
    <?= fuente($configuracion["fuente"])?>
</head>

<body>
    <form action="index.php" method="post">
        <span>Seleccione idioma</span>

        <select name="idioma" id="">
            <option value="Español">Español</option>
            <option value="Ingles">Ingles</option>
        </select>
        <br><br>
        <span> Color de Fuente </span>
        <input type="color" name="fuente">
        <br><br>
        <span> Color de Fondo </span>
        <input type="color" name="fondo">
        <br><br>
        <input type="submit" value="Ok">

    <?php
      
      if($configuracion["idioma"]==="Español"){
        echo "<h1>In the end-Linkin Park</h1>";  
        lengua($letrEspañol);
      }elseif($configuracion["idioma"]==="Ingles"){
          echo "<h1>In the end-Linkin Park</h1>";
        lengua($letraIngles);
      }else{
          echo " <center>
          <p>
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, doloremque quas esse impedit a neque voluptatibus debitis quidem dolorum blanditiis, quibusdam similique consectetur inventore exercitationem rerum. Molestias id omnis ad!
           </p>
          </center> ";
      }
      
    ?>        
       


    </form>

</body>

</html>