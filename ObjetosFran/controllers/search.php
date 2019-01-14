<?php

if(!isset($_POST['buscar'])) header ('Refresh: 1; url=./../index.html');

$inp = file_get_contents('./../data/anuncios/data.json');
$antiguoJson = json_decode($inp, true);
$semaforo=false;

for ($i=0; $i <count($antiguoJson); $i++) { 
  foreach ($antiguoJson[$i] as $key => $value) {
    if($key=='titulo'){
      if (strpos($value, $_POST['buscar'])) {
        $anuncio=$antiguoJson[$i];
        $semaforo=true;
      }
    }
  }
}

if($semaforo===false){
   header ('Refresh: 2; url=./../views/publicar.html');
   echo "Ningun anuncio";
}else{
  pepetter();
  echo "<div class='buscado'>";
  foreach ($anuncio as $key => $value) {
    if($key==='image'){
      echo "<img src='../data/$value' width='700'/>";
    }else{
      echo "$value  ";
    }
    }
    echo "</div>";
  terminar();
}

function pepetter(){
 echo "<!DOCTYPE html>
   <head>
     <title>Document</title>
     <link rel='stylesheet' href='../styles.css' />
   </head>
   <body>
     <header>
       <img class='logo' src='./data/logo.jpg' />
       <a href='../views/login.html'><button class='button'>LogIn</button></a>
       <a href='../views/register.php'
         ><button class='button'>Registrer</button>
       </a>
       <a href='../views/publicar.html'>
         <button class='button'>Publica</button>
       </a>
     </header>
 
     <div class='content'>
       <h2>BIENVENIDO A COCHES PEPETTER</h2>
       <form action='../controllers/search.php' method='POST'>
         <label >Busque su anuncio</label>
         <input type='text' name='buscar' />
       </form>
     ";
}

function terminar(){
  echo "   </div>
  </body>
</html>";
}

?>