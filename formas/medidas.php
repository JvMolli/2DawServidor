<?php

echo "<meta charset = 'utf-8'>

	<style>
		body {background-image: url('image/back.jpg'); background-repeat: no-repeat; background-color: lightblue; background-size: cover; opacity: 0.8 }
		form {margin: 20% 10% 10% 20%; }
		h1 {margin: 3% 0 5% 0; }
		p {font-size: 20px; padding-left: 2%;}
		input {margin-left: 2%;}
		label {padding-left: 1%;}


	</style>";

	echo "<form action = color.php method = post>

		<h1>Defina las medidas de la figura:</h1>";


	switch ($_POST['figura']) {
		case 'rect':
			echo "<label for = 'med_A'>Largura: </label><input type = 'number' name = 'med_A' min = 0 max = 250 step = 1 value = '100' ><br><br>";
			echo "<label for = 'med_B'>Anchura: </label><input type = 'number' name = 'med_B' min = 0 max = 250 step = 1 value = '50' ><br><br>";
			break;
		case 'cuad':
			echo "<label for = 'med_A'>Lado: </label><input type = 'number' name = 'med_A' min = 0 max = 250 step = 1 value = '60' ><br><br>";
			break;
		case 'circ':
			echo "<label for = 'med_A'>Radio: </label><input type = 'number' name = 'med_A' min = 0 max = 125 step = 1 value = '20' ><br><br>";
			break;
		case 'triang':
			echo "<label for = 'med_A'>Base: </label><input type = 'number' name = 'med_A' min = 0 max = 250 step = 1 value = '100' ><br><br>";
			echo "<label for = 'med_B'>Altura: </label><input type = 'number' name = 'med_B' min = 0 max = 250 step = 1 value = '50' ><br><br>";
			break;
		
		default:
			# code...
			break;
	}

	echo "<input type = 'hidden' name = 'figura' value = '".$_POST['figura']."'>";

	echo "<br><br><input type = 'submit' value = 'OK'>

	</form>";

?>