<?php
$x=190;
$y=185;
$bingoImg=imagecreatefromjpeg('./Bingo/bolas.jpg');
function createImageFromSource($source, $type)
{
    // JPG 
    if (preg_match('/jpg|jpeg/', $type))  $data = imagecreatefromjpeg($source);
    // PNG
    if (preg_match('/png/', $type))  $data = imagecreatefrompng($source);
    // GIF
    if (preg_match('/gif/', $type))  $data = imagecreatefromgif($source);
    return $data;
}

function getSize($imagen){
    return $imagen = getimagesize($imagen);    
    //Devuelve array con informacion de Ancho[0] y alto [1] 
}

function createBolas($x, $y, $bingoImg){
    $bolas=array();
    $pepepetter=imagecreate(190, 185);
    $origenX=48;
    $origenY=0;
    $cont=0;
    $nomBolas = './pelotas/bola';

    for ($i=0; $i < 10 ; $i++) { 

        $archivo = $nomBolas.(($i+1)%10);
        imagecopyresampled($pepepetter, $bingoImg, 0,0, $origenX, $origenY, $x, $y, $x, $y);
        imagejpeg ( $pepepetter, $archivo);
        $bolas[($i+1)%10] = "<img src='$archivo'>";

       // echo "<img src='$archivo'>";

        if($i == 4){
            $origenX= 48;
            $origenY = 185;
        }else{
            $origenX=$origenX+$x;
        }

    }
    return $bolas;
}

function getBolas($num, $bolas){

    //shuffle($bolas);
    
    return $bolas[$num];

}
// $num=rand ( 0 , 9 );
// $pepe=createBolas($x,$y,$bingoImg);
// $paco=getBolas($num,$pepe);

// echo $paco;
// echo '<a href="Bingo.php"><button>Otra Bola</button></a>';

?>