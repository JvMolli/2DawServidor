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
        echo '<form action="login.php" method="get"><h4>Introduzca usuario y contrasña</h4>
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombre">
        <label for="">Contrseña</label>
        <input type="password" name="pass"><input type="submit" value="OK"></form>';  
    }


?>