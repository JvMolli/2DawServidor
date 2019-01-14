<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <style>
        body{
        background-image: url('./foto.jpg');
        background-size: cover;
        }
    </style>
</head>
<body>
    

<center>

<?php
    
    require('./captcha.php');
    if(!session_start()){
        session_start();
}
      
    $nombre = 'Jaime';
    $passw = '1234';
    if (!isset($_GET['nombreR']) && !isset($_GET['passR'])) {
        $archivo = 'mypic.jpeg';
        $patata=captcha($archivo);
        echo $patata;
        echo '<form action="index.php" method="get"><h2>Registrese</h2>
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombreR">
        <label for="">Contrseña</label>
        <input type="password" name="passR" id="passR"><br><br><br>
        <img src="' . $archivo . '"><br>
        <input type="text" name="Captcha"><br>
        <input type="submit" value="OK"></form>
        <br><br><br>        
        <p>NOMBRE: Jaime PASSW: 1234</p>';
        $_SESSION["patata"] = $patata;
    }elseif (isset($_GET['nombreR']) && isset($_GET['passR']) && isset($_GET['Captcha']) && !empty($_GET['nombreR']) && !empty($_GET['passR']) && !empty($_GET['Captcha'])){
        if ($_GET['nombreR']===$nombre && $_GET['passR']===$passw && $_GET['Captcha']==$_SESSION["patata"]) {
            header ('Refresh: 5; url=./verDatos.php');
            echo "Su patata de usuario es -- $nombre ---";
        }else{
            header ('Refresh: 0; url=./malDatos.php');
            echo 'PEPE tranquilo Huliiooo';
        }
    }



?>


</center>








</body>
</html>
