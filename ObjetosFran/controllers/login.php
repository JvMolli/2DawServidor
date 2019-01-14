<?php
  require '../clases/persona.php';
  $inp= file_get_contents('./../data/personas/data.json');
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
          $pepetter='./../data/'.$value;
        }
      }
      echo "<img src='$pepetter' width: '350' height: '350'>";
      echo "<a href='./views/register.php'><button>Volver</button></a>";
      echo "<div>";
      session_start();
      $_SESSION['id']=1;
      print_r($_SESSION);
      header ('Refresh: 5; url=./../index.php?id='.urlencode($_SESSION['id']));

    }
  }else{
    header ('Refresh: 5; url=./../index.php');
    echo 'CACA PA TI';
  }
  

?>