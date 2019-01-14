<?php

	require 'classes/formas.php';
	require 'classes/rectangulo.php';
	require 'classes/cuadrado.php';
	require 'classes/circulo.php';
	require 'classes/triangulo.php';

	echo "<meta charset = 'utf-8'>

		<style>
			body {background-image: url('image/back.jpg'); background-repeat: no-repeat; background-color: lightblue; background-size: cover; opacity: 0.8 }
			form {margin: 20% 10% 10% 20%; }
			h1 {margin: 10% 10% 5% 10%; }
			p {font-size: 20px; padding-left: 2%;}
			input {margin-left: 2%;}
			label {padding-left: 1%;}
			.dibujo {margin: 10% 10% 10% 10%;}
			.mensaje {width: 500px; heigh: 500px; margin: 5% 10% 10% 10%;}

		</style>";	

	$fig = unserialize($_COOKIE['form']);

	$fig->setColor($_POST['color']);

	echo "<h1>Soy un ".$fig->nombre.": </h1>";	

	echo "<div class = 'contenedor'>";

	echo 	"<div class = 'dibujo'>";

		$espacio = 300;
		$image = imagecreatetruecolor($espacio, $espacio);
		$area = imagecolorallocate($image, 200, 200, 200);
		imagefilledrectangle($image, 0, 0, $espacio, $espacio, $area);

		$background_color = $fig->allocateCollor($image);

		$fig->makeShape($image, $background_color, $espacio);

		$id = rand(0,10000);

		imagepng($image,"image/image".$id.".png");

		echo "<img src = 'image/image".$id.".png'>";


	echo		"</div>";

	echo 	"<div class = 'mensaje'>";

	echo 		"<h2>";
	echo 		$fig->texto();
	echo 		"</h2>";

	echo 	"</div>";

	echo "</div>";

	echo "<a href = 'index.php?terminar=1>Dibujar otra Forma</a>"

?>