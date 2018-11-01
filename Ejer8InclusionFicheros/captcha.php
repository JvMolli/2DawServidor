<?php

function randomLetter(){
    $chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    return $chars[rand(0, strlen($chars)-1)];
  }

function captcha($archivo){
    $image=imagecreate(200, 100);
    imagecolorallocate( $image, rand(0, 100), rand(0, 100), rand(0, 100)); 
    $patata = '';
    $x = 20;
    $y = 40;
    $ang = -30;
    putenv('GDFONTPATH=' . realpath('.'));
    $font = 'p';
    for ($i = 0; $i < 5; $i++){ 
        // se sacan las letras de una en una para aplicar distintos valores de posición y ángulo
        $text = randomLetter();
        $patata .= $text;
        $imageC=imagecolorallocate( $image, rand(0, 255), rand(0, 255), rand(0, 255)); 
        imagettftext( $image, rand(25, 30), $ang, $x, $y, $imageC, $font, $text);
        $x += 30;
        $y += 10;
        $ang += 20;
      }
    $imageC=imagecolorallocate( $image, rand(0, 255), rand(0, 255), rand(0, 255)); 
    $x -= 10;
    $y -= 20;
    $ang = -30;
    $text = rand(0, 9); // se genera un número y se inserta en la imagen
    $patata .= $text;
    imagettftext( $image, rand(25, 30), $ang, $x, $y, $imageC, $font, $text);
    //header("Cache-Control: no-cache, must-revalidate");
    //header('Content-type: image/jpeg');
    //readfile(USER_DIR.CURRENT_DIR . '/' .$archivo);
    imagejpeg($image, $archivo);
    return $patata;
    }


