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
			h1 {margin: 3% 0 5% 0; }
			p {font-size: 20px; padding-left: 2%;}
			input {margin-left: 2%;}
			label {padding-left: 1%;}

		</style>";

	echo "<form action = 'resultado.php' method = 'post' >

			<h1>Defina el color de la figura:</h1>

			<input type = 'color' name = 'color' value = '#55AAAA'>

			<input type = 'submit' value = 'OK'>

		</form>";

	switch ($_POST['figura']) {
		case 'rect':
			$fig = new rectangulo($_POST['med_A'], $_POST['med_B']);
			break;
		case 'cuad':
			$fig = new cuadrado($_POST['med_A']);
			break;
		case 'circ':
			$fig = new circulo($_POST['med_A']);
			break;
		case 'triang':
			$fig = new triangulo($_POST['med_A'], $_POST['med_B']);
			break;		
		default:
			break;
	}

	$fig_ser = serialize($fig);

	setcookie("form", $fig_ser, time() + 3600);

?>