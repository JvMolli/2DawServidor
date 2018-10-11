
<?php
    $numGet = $_POST['numeros'];
    $numSize = $numGet + "";
    //echo $numGet;
    if (strlen($numSize)!=8) {
        echo "Por favor introduzca un DNI correcto";
    }else{
        $numL = $numGet % 23;
        $letrasDNI = "TRWAGMYFPDXBNJZSQVHLCKE";
        $letras = substr ($letrasDNI, $numL, 1);
        echo  "La letra para su DNI es la  <h3>$letras</h4>";
    }

?>