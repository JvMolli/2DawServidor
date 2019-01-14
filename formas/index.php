<?php

if (isset($_COOKIE)){
		setcookie('form','',time()-3600);
}

echo "<meta charset = 'utf-8'>

	<style>
		body {background-image: url('image/back.jpg'); background-repeat: no-repeat; background-color: lightblue; background-size: cover; opacity: 0.8 }
		form {margin: 20% 10% 10% 20%; }
		h1 {margin: 3% 0 5% 0; }
		p {font-size: 20px; padding-left: 2%;}
		input {margin-left: 2%;}
		label {padding-left: 1%;}



	</style>";

echo "<form action = medidas.php method = post>

		<h1>¿Que figura quieres pintar?</h1>

		<p>Tipo de figura: </p>
		<input type = 'radio' name = 'figura' value = 'rect' checked ><label for = 'rect' >Rectangulo</label><br><br>
		<input type = 'radio' name = 'figura' value = 'cuad'><label for = 'cuad'>Cuadrado</label><br><br>		
		<input type = 'radio' name = 'figura' value = 'circ'><label for = 'circ'>Círculo</label><br><br>
		<input type = 'radio' name = 'figura' value = 'triang'><label for = 'triang'>Triangulo</label><br><br>

		<br><br><input type = 'submit' value = 'OK'>


	</form>";


?>