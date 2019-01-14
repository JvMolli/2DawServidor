<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        function getNameFile($name, $len){
            $replace = substr($name, 0, $len);
            return $replace;
        }
 
        $name = str_replace(' ', '', $_POST['nombre']);
        $nameLenght = strlen($name);
        $dir = '../img';
        $ficheros = scandir($dir);
        
        foreach ($ficheros as $key => $value) {
           
            if (getNameFile($value, $nameLenght)===$name &&  pathinfo($value, PATHINFO_EXTENSION)===$_POST['type']){ 
            echo " <div><img src='../img/$value'></div> ";
            
            }else{
                "<h3>No se encontrarion archivos</h3>";
            }

        }


    ?>

</body>
</html>
