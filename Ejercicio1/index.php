<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table{
            width: 500px;
            height: 300px;
            text-align: center;
            border-style: solid;
        }
        table,tr,td,th {
            border: 1px solid black;
        }
        .warning{
            background-color: red;
        };
        .normal{
            background-color: yellow;
        }
        td{
            background-color: yellow;
        }
    </style>
</head>
<body>
    
<center><h2>Ejercicio 1</h2></center>
<?php
$temperaturas=array();
$temperaturas['Caja_1']=array(1,1,2,3,2,1,2,3,3,3,2,1,3,4);
$temperaturas['Caja_2']=array(0,0,3,2,4,3,2,0,1,2,3,4,2,1);
$temperaturas['Caja_3']=array(3,1,2,3,5,2,2,0,1,2,3,4,2,1);
$temperaturas['Caja_4']=array(2,2,2,3,5,2,3,2,0,1,2,3,0,1);
$temperaturas['Caja_5']=array(0,3,2,3,5,2,3,2,0,1,2,3,0,1);

function boxPretty($str){
    return str_replace("_", " ", $str);
}
echo "<center><table>";

    foreach ($temperaturas as $keyT => $value ){
        echo "<tr>";

        echo "<td>". boxPretty($keyT) ."</td>";

        foreach ($value as $temp){
            if($temp > 4){
                
                echo  "<td class=warning>".$temp."</td>" ;

            }else{

                echo "<td class=normal>".$temp."</td>";

            }
        }       
        echo "</tr>";
    }
echo "</table></center>";
?>

<center><h2>Ejercicio 2</h2></center>
<?php
    echo "<center>";
    for ($i=1; $i <= 10 ; $i++) { 
        echo "<a href='ejercicio2.php?value=". $i . "'> la tabla del  " .$i."</a><br>";
    }
    echo "</center>";
?>
    
<center><h2>Ejercicio 3</h2></center>
<center><iframe src="adivina.html" frameborder="0" width="300" height="200">
</iframe></center>

<center><h2>Ejercicio 4</h2></center>
<center>
<form action="" method="post">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="">Nota</label>
    <input type="number" step="0.1" name="nota" id="nota">

<input type="submit" value="almacenar" name="alm" id="alm">
<input type="submit" value="Visualizar notas" name="env" id="env">
</form>

<?php
    if(!session_start()){
            session_start();
            $_SESSION["ses"] = array($nombre => $nota);
    }
    if (isset($_POST['alm'])) {
        $nombre = $_POST["nombre"];
        $nota = $_POST["nota"];
        
        $_SESSION["ses"][$nombre]= ($nota);
        print_r($_SESSION["ses"]);
         
    }elseif (isset($_POST["env"])) {
        print_r($_SESSION["ses"]);
        echo "<table>";
        foreach ($_SESSION["ses"] as $nombre => $nota) {
            if($nota < 5){
                echo"<tr>"."<td class='warning'> $nombre </td>"."<td class='warning'> $nota </td>"."</tr>";
            }else{
                echo"<tr>"."<td> $nombre </td>"."<td> $nota </td>"."</tr>";
            }
        }
        echo "</table>";
        $_SESSION['ses']=null;
    }
?>
</center>

<br>
<br>
<br>
<br>
<br>

<center><h2>Ejercicio 5</h2></center>
,<center>
<form action="letraDNI.php" method="post">
    <label for="">DNI</label>
    <input type="text" name="numeros">
    <input type="submit" value="Comprobar">
</form>
</center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>
</html>