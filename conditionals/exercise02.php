<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Conditionals 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 2 Conditionals</h3>
		<p>2. Registrar a un usuario indicando que ingrese su nombre y su edad (Validar que la edad este en el rango de 18 a 100). Mostrar un mensaje de error o un mensaje que indique que el usuario se ha registrado.</p>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Name: </label>
				<input type="text" name="name" placeholder="Your name..." >
			</div><br>
			<div>
				<label for="text">Age: </label>
				<input type="number" name="age" placeholder="Your age...">
			</div><br>
			<div>
				<input type="submit" name="button" id="sending" value="Register">
			</div>
		</form><br>
		<?php

			if (isset($_POST['button'])) {
				$name = $_POST['name'];
				$age = $_POST['age'];
				$host = "localhost";
				$db_name = "login";
				$user = "root";
				$pass = "02125646334**";

				//Validaciones de los campos
				//Aplico el preg_match de php para comprobar que sól sean letras y espacios. Esto aplica sólo para la variable $name porque se espera un valor string que no acepte números
				$patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
				if (empty($name)) {
					echo "El campo no puede estar vacío, ingrese un nombre." . "<br>";
				}else{
					if (preg_match($patron_texto, $_POST['name'])) {
						echo "Su nombre es: " . $_POST['name'] . "<br>";
					}else{
						echo "El campo nombre sólo puede contener letras y espacios" . "<br>";
					}
				}

				if (empty($age)) {
					echo "El campo no puede estar vacío, ingrese su edad.";
				}else{
					if (is_numeric($age)==false){
						echo "El campo debe contener sólo números. Ingrese su edad en números.";
					}elseif ($age>=18 || $age<=100){
						echo "Su edad es: " . $age . "<br>";
						echo "Usuario Registrado!" . "<br>";
					}else{
						echo "La edad debe ser entre 18 y 100.";
					}
				
					$conexion = mysqli_connect($host, $user, $pass);

					if (mysqli_connect_errno()) {
						echo "Error al conectar con la Base de Datos";
					}

					mysqli_select_db($conexion, $db_name) or die ("No se encuentra la Base de Datos!");

					mysqli_set_charset($conexion, "utf-8");

					$query = "SELECT * FROM usuarios";

					$result = mysqli_query($conexion, $query);

					$fila = mysqli_fetch_row($result);

					echo "Registros de la BD agregados por consola:" . "<br>";
					echo $fila[0] . "<br>";
					echo $fila[1] . "<br>";
					echo $fila[2] . "<br>";
				}
			}

		?>

	</body>
</html>