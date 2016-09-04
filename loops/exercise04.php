<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Exercise 4 - Loops</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 4 - Loops</h3>
		<p>4. Duplicar un número positivo dado por el usuario, en caso de no ser positivo mostrar un mensaje de error y repetir la instrucción de lectura.</p>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<input type="text" name="number" placeholder="Enter a number" >
			</div><br>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if (isset($_POST['button'])){
				$num = $_POST['number'];
				if (!empty($num)==TRUE || $num == 0) {
					if (is_numeric($num)==TRUE) {
						if ($num>0) {
							echo "El número $num es positivo!";
						}elseif ($num==0) {
							echo "El número es igual a 0";
						}else {
							echo "El número es negativo";
						}
					}else {
						echo "Introduzca sólo números";
					}
				}else {
					echo "El campo no puede estar vacío.";
				}
			}


		?>
	</body>