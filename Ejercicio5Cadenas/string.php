<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        form {
            margin: 0 auto;
            width: 80%;
            height: 650px;
            background-image: url(./img.jpg);
            background-size: cover;
            margin-bottom: 25px;

        }

        form div {
            float: left;
            width: 25%;
            height: 50%;
            margin-top: 10%;
            background-color: rgba(555,222,111, 0.5);
            margin-right: 10px;
        }

        form h3 {
            color: azure;
            font-size: 25px;
        }

        .salida {
            width: 350px;
            height: 250px;
            margin : 0 auto;
            background-color: black;
            color: white;
            font-size : 125px:

        }

        form textarea {
            width: 60%;
            height: 75%;
            margin-top: 5%;

        }
        .word{
            width: 90%;
            height: 50%;
        }
        .sus{
            width: 93%;
            height: 10%;
        }
        </style>
    <title>Document</title>
</head>
<body>
    
    <?php
      function paint (){
            echo '<form action="string.php" method="post">';
            echo '<h3>Introduzca tu cadena</h3>';
            echo '<textarea name="text" id="" cols="15" rows="10"></textarea>';
            echo '<div>';
            echo '    <input type="radio" name="type" value="busca" checked> Busca<br>';
            echo '    <input type="radio" name="type" value="sustituye"> Sustituye<br>';
            echo '    <input type="radio" name="type" value="elimina"> Elimina <br>';
            echo '    <textarea class="word" name="word" id="" cols="30" rows="10"></textarea>';
            echo '    <input type="submit" name="ENV">';
            echo '    <textarea class="sus" name="SUSTITUTA" id="" cols="30" rows="10">Ponga aqui la palabra por la que sustituir</textarea>';
            echo '</div>>';
            echo '</form>';
        }

        function delete ($string){
            echo '<form action="string.php" method="post">';
            echo '<h3>Introduzca tu cadena</h3>';
            echo '<textarea name="text" id="" cols="30" rows="10"></textarea>';
            echo '<div>';
            echo '    <input type="radio" name="type" value="busca" checked> Busca<br>';
            echo '    <input type="radio" name="type" value="sustituye"> Sustituye<br>';
            echo '    <input type="radio" name="type" value="elimina"> Elimina <br>';
            echo '    <textarea class="word" name="word" id="" cols="30" rows="10"></textarea>';
            echo '    <input type="submit" name="ENV">';
            echo '    <textarea class="sus" name="SUSTITUTA" id="" cols="30" rows="10">Ponga aqui la palabra por la que sustituir</textarea>';
            echo '</div>>';
            echo '</form>';
            echo "<div class='salida'>$string</div>";
        }
        function search ($string){
            echo '<form action="string.php" method="post">';
            echo '<h3>Introduzca tu cadena</h3>';
            echo '<textarea name="text" id="" cols="30" rows="10">'.$string.'</textarea>';
            echo '<div>';
            echo '    <input type="radio" name="type" value="busca" checked> Busca<br>';
            echo '    <input type="radio" name="type" value="sustituye"> Sustituye<br>';
            echo '    <input type="radio" name="type" value="elimina"> Elimina <br>';
            echo '    <textarea class="word" name="word" id="" cols="30" rows="10"></textarea>';
            echo '    <input type="submit" name="ENV">';
            echo '    <textarea class="sus" name="SUSTITUTA" id="" cols="30" rows="10">Ponga aqui la palabra por la que sustituir</textarea>';
            echo '</div>>';
            echo '</form>';
            echo "<div class='salida'>$string</div>";
        }
        function remplazar ($string){
            echo '<form action="string.php" method="post">';
            echo '<h3>Introduzca tu cadena</h3>';
            echo '<textarea name="text" id="" cols="30" rows="10"></textarea>';
            echo '<div>';
            echo '    <input type="radio" name="type" value="busca" checked> Busca<br>';
            echo '    <input type="radio" name="type" value="sustituye"> Sustituye<br>';
            echo '    <input type="radio" name="type" value="elimina"> Elimina <br>';
            echo '    <textarea class="word" name="word" id="" cols="30" rows="10"></textarea>';
            echo '    <input type="submit" name="ENV">';
            echo '    <textarea class="sus" name="SUSTITUTA" id="" cols="30" rows="10">Ponga aqui la palabra por la que sustituir</textarea>';
            echo '</div>>';
            echo '</form>';
            echo "<div class='salida'>$string</div>";
        }

        function remark($string, $texto){
           return preg_replace("/$string/", "<mark>$string</mark>", $texto );
        }
      if(!isset($_POST['ENV'])){
          paint();
      } elseif ($_POST['type']==='elimina'){
        $texto = $_POST['text'];
        $word = $_POST['word'];
        $texto = str_replace($word, '', $texto);
        delete($texto);
      } elseif($_POST['type']==='busca') {
        $texto = $_POST['text'];
        $finalText='';
        $word = $_POST['word'];
        /*$pp = explode(' ', $texto);
        foreach($pp as $str){
            if($str!==$word) $finalText .= $str . ' ';
            if ($str===$word)$finalText .= "<mark>$str</mark>";
        }*/
        search(remark($word, $texto));
      } elseif($_POST['type']==='sustituye'){
        $texto = $_POST['text'];
        $word = $_POST['word'];
        $sus = $_POST['SUSTITUTA'];
        if (strpos($texto, $word) !== false) {
            $texto = str_replace($word, $sus, $texto);
        }
        remplazar($texto);
      }



    ?>


</body>
</html>