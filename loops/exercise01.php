<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Loops 1</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 1</h3>
		<p>1. Dado un número N, mostrar todos los números entre el rango de 1 a N.</p>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<input type="text" name="number" placeholder="Enter a number" >
			</div><br>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>

		<?php
			if (isset($_POST['button'])) {
				$num = $_POST['number'];

				//Validaciones
				if (empty($num)==TRUE) {
					echo "El campo no puede estar vacío!";
				}elseif (is_numeric($num)==FALSE) {
					echo "El campo no acepta letras. Ingrese un número.";
				}

				if (is_numeric($num)==TRUE) {
					for ($i=1; $i<$num+1;$i++) { 
					echo $i . "<br>";
					
					}
				}

			}



		?>



	</body>
</html>