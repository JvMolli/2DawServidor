

<html><body><?php


if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $name = str_replace (' ', '', $_POST['nombre']);
    $archivo = $name. '  ' . $_FILES['imagen']['name'];
    $direc = "../img/";
    $subida = $direc . $archivo;

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $subida)) echo $_POST['nombre'] . " " . "El fichero es válido y se subió con éxito.\n";
    else echo "¡Posible ataque de subida de ficheros!\n";

}




?></body></html>