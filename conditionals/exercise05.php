<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Conditionals 5</title>
		<meta charset="utf-8">
		<style type="text/css">
			div{
				display: inline;
			}
		</style>
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 2 Conditionals</h3>
		<p>5. Muestre un menú al usuario con opciones de suma,resta, multiplicación y división. Reciba la opción y los datos requeridos para la operación, luego indique cual es el resultado.</p>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<input type="text" name="number1" placeholder="First number" >
			</div>
			<div>
				<input type="text" name="number2" placeholder="Second number">
			</div>
			<div>
				<input type="submit" name="button1" id="suma" value="Suma">
			</div>
			<div>
				<input type="submit" name="button2" id="resta" value="Resta">
			</div>
			<div>
				<input type="submit" name="button3" id="multiplicacion" value="Multiplicación">
			</div>
			<div>
				<input type="submit" name="button4" id="division" value="División">
			</div>

		</form><br>
		<?php
			//Suma
			if (isset($_POST['button1'])){
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				if (empty($num1)==TRUE && $num1!=0) {
					echo "El primer campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num1)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}
				if (empty($num2)==TRUE && $num2!=0) {
					echo "El segundo campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num2)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}

				if (is_numeric($num1)==TRUE && is_numeric($num2)==TRUE) {
					$suma = $num1 + $num2;
					echo "La suma de $num1 + $num2 es: " . $suma;
				}
			}

			//Resta
			if (isset($_POST['button2'])){
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				if (empty($num1)==TRUE && $num1!=0) {
					echo "El primer campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num1)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}
				if (empty($num2)==TRUE && $num2!=0) {
					echo "El segundo campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num2)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}

				if (is_numeric($num1)==TRUE && is_numeric($num2)==TRUE) {
					$resta = $num1 - $num2;
					echo "La resta de $num1 - $num2 es: " . $resta;
				}
			}

			//Multiplicación
			if (isset($_POST['button3'])){
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				if (empty($num1)==TRUE && $num1!=0) {
					echo "El primer campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num1)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}
				if (empty($num2)==TRUE && $num2!=0) {
					echo "El segundo campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num2)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}

				if (is_numeric($num1)==TRUE && is_numeric($num2)==TRUE) {
					$multi = $num1 * $num2;
					echo "La multiplicación de $num1 * $num2 es: " . $multi;
				}
			}

			//Dvisión
			if (isset($_POST['button4'])){
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				if (empty($num1)==TRUE && $num1!=0) {
					echo "El primer campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num1)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}
				if (empty($num2)==TRUE && $num2!=0) {
					echo "El segundo campo no puede quedar vacío." . "<br>";
				}elseif (is_numeric($num2)==FALSE){
					echo "El campo no puede contener letras. Ingrese sólo números." . "<br>";
				}

				if (is_numeric($num1)==TRUE && is_numeric($num2)==TRUE) {
					if ($num2==0) {
						echo "Ningún número puede ser dividido por 0. Error.";
					}else{
						$suma = $num1 / $num2;
						echo "La división de $num1 / $num2 es: " . $suma;
					}
				}
			}

		?>

	</body>
</html>