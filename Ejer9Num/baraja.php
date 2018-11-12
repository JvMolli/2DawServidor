<?php
$x=119;
$y=195;
$bingoImg=imagecreatefrompng('./Bingo/baraja.png');
function createBolas($x, $y, $bingoImg){
    $bolas=array();
    $pepepetter=imagecreate(119, 195);
    $origenX=0;
    $origenY=0;
    $cont=0;
    $nomBolas = './cartas/carta';

    for ($i=0; $i < 44 ; $i++) { 

        $archivo = $nomBolas.($i+1);
        imagecopyresampled($pepepetter, $bingoImg, 0,0, $origenX, $origenY, $x, $y, $x, $y);
        imagepng ( $pepepetter, $archivo);
        $bolas[$i+1] = "<img src='$archivo'>";

       echo "<img src='$archivo'>";

        if($i===11){
            $origenX= 0;
            $origenY *2;
        }
        else{
            $origenX=$origenX+$x;
        }

    }
   
}


createBolas($x,$y,$bingoImg);


?>