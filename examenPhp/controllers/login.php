<?php
  require './persona.php';
  $inp= file_get_contents('./../data/data.json');
  $users = json_decode($inp);
  $semaforo=false;
  echo "<br><br>";
  for ($i=0; $i <count($users) ; $i++) { 
    foreach ($users[$i] as $campo => $valor) {
      if ($campo=='telefono' && $valor==$_POST['telefono']) {
        $exist=$users[$i];
        break;
      }
    }
  }
  
  if($exist){
    foreach ($exist as $campo => $valor) {
      if ($campo=='contraseña' && $valor==$_POST['contraseña']) {
        $semaforo=true;
      }
    }
    if($semaforo){
      echo "<div>";
      foreach ($exist as $key => $value) {
        if($key!='imagen')echo $key . ": " . $value . "<br>";
        if ($key==='imagen') {
          $pepetter='./../img/'.$value;
        }
      }

      echo "<img src='$pepetter' width: '350' height: '350'>";
      echo "<a href='./views/register.php'><button>Volver</button></a>";
      echo "<div>";
    }
  }else{
    header ('Refresh: 5; url=./../index.html');
    echo 'CACA PA TI';
  }
  

?>