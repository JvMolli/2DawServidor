<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    
<h1>Ejercicio1</h1>
<center>
<h1>REGISTRO</h1>

<form action="registro.php" method="get"><h2>Registrese</h2>
        <label for="">Correo electronico</label>
        <input type="text" name="correo">
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombreR"><br><br>
        SEXO <br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br><br>

        <select name="idioma">
                <option value="ingles">Ingles</option>
                <option value="frances">Frances</option>
                <option value="español">Español</option>
                <option value="portugues">Portugues</option>
        </select><br><br>

        <label for="">Contrseña</label>
        <input type="password" name="passR" id="passR"><input type="submit" value="OK">
</form>

<h1>LogIn</h1>
<form action="login.php" method="get"><h4>Introduzca usuario y contrasña</h4>
        <label for="">Nombre de usuario</label>
        <input type="text" name="nombre">
        <label for="">Contrseña</label>
        <input type="password" name="pass"><input type="submit" value="OK">
</form>
       

</center>






</body>
</html>