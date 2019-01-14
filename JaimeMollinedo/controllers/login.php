<?php
require('../clases/usuario.php');

if (isset($_GET['nombre']) && isset($_GET['contraseña']) ) {
  $inp = file_get_contents('./../data/usuarios.json');
  $json=json_decode($inp);
  $log=false;
  $user = new Usuario($_GET['nombre'],$_GET['contraseña']);

  for ($i=0; $i<count($json) ; $i++) {
    $sn=$json[$i];
    if($user->existe_usuario($sn[1], $sn[2])){
      $log=true;
      session_start();
      $_SESSION['nombre']=$_GET["nombre"];
      print_r($_SESSION);
      header ('Refresh: 3; url=./../views/compra.php');
    }
  }

  if ($log==false) {
    header ('Refresh: 3; url=./../views/login.php');
    echo 'Ususario o Contraseña incorrecta';
  }

}
  

?>