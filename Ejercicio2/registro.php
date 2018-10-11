<?php
     if(!session_start()){
        session_start();
        $_SESSION["ses"] = array($nombreR => $passR);
    }
    if(isset($_GET['nombreR']) && isset($_GET['passR']) && isset($_GET['correo']) && !empty($_GET['correo']) && !empty($_GET['nombreR']) && !empty($_GET['passR'])){
        $nombre=$_GET['nombreR'];
        $pass=$_GET['passR'];
        $_SESSION["ses"][$nombre]= ($pass);
        $correo = $_GET["correo"];
        echo "<H1>FELICIDADES SE HA REGISTRADO EN www.peppetter.com</H1><br>
            <h3>su nombre es $nombreR con correo electronico $correo </h3>
        "; 
        
        /*$registrerMail = array($correo=>$passM);
        $correo=$_GET['correo'];
        $passR=$_GET['passM'];*/
       // print_r($_SESSION["ses"]);
      
       /* echo '<button><a href="login.php">Entre en nuestra pagina</a></button>';*/

    } else {
        
        echo '<form action="registro.php" method="get"><h2>Registrese</h2>
        <label for="">Correo electronico</label>
        <input type="text" name="correo">
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombreR">
        <label for="">Contrseña</label>
        <input type="password" name="passR" id="passR"><input type="submit" value="OK"></form>';
       
    }

?>

<?php

    if(isset($_GET['nombre']) && isset($_GET['pass']) && !empty($_GET['nombre']) && !empty($_GET['pass'])){
        $name=$_GET['nombre'];
        $password=$_GET['pass'];
        foreach ($_SESSION['ses'] as $key => $val) {
            if ($val[$name] === $password) {
                $patata = 'Usuario Valido';
            }
        }
        
        if ($patata) echo $patata;
        else echo "Usuario o contraseña no valido";

    } else {
        echo '<form action="" method="get"><h4>Introduzca usuario y contrasña</h4>
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombre">
        <label for="">Contrseña</label>
        <input type="password" name="pass"><input type="submit" value="OK"></form>';  
    }


?>