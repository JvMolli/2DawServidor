<?php

 
  if ($_GET['num']==2 || $_GET['num']==4 ) {
    setcookie('preferencias',$_GET['num'],time()+3600);
    print_r($_COOKIE);
    header ('Refresh: 5; url=./../views/compra.php');
    $_SESSION['preferencias']=$_COOKIE['preferencias'];

  }else{
    setcookie('preferencias',0,time()+3600);
    header ('Refresh: 5; url=./../views/compra.php');
    print_r($_COOKIE);
    $_SESSION['preferencias']=0;

  }

 

?>