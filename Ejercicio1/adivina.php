<?php
    $numGet = $_POST['numero'];
    $randNum = mt_rand(1 , 1);
    
    if($numGet > 10){
        $txt = 'No vaciles y pon uno menor de 10 que te dejo sin pillar to la vida';
    }elseif( $numGet == $randNum ){
        $txt = 'ENORABUENA prueba a jugar a el euromillon y sal de fiesta que hoy pillas estas de suerte!';
    }else{
        $txt = 'LO SIENTO prueba a hacerte un tinder asi quiza ligues';
    }
    echo "<h2>". $txt ."</h2>"; 
    echo '<a href="adivina.html"><h4>' . 'VOLVER' . '</h4></a>';



?>