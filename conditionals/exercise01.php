<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 14</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 1 Conditionals</h3>
		<p>1. Dado un número indicar si es mayor a 100.</p>
		<form name="exer14" action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Type a number:</label>
				<input type="text" name="number" placeholder="Type a number" >
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if (isset($_POST['button'])) {
				$valor = $_POST['number'];

				if (empty($valor)) {
					echo "El campo no puede estar vacío, ingrese un número.";
				}elseif (is_numeric($valor)==false) {
					echo "El campo no debe contener letras. Ingrese un número.";
				}elseif ($valor>100) {
					echo "EL número $valor es mayor a 100.";
				}else{
					echo "El número $valor no es mayor a 100.";
				}
			}
		?>

	</body>
</html>