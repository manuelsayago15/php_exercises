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
				if (empty($name) && empty($age)) {
					echo "Los campos no pueden estar vacíos!" . "<br>";
				}elseif (empty($name) || empty($age)) {
					if (empty($name)) {
						echo "El campo no puede estar vacío, ingrese un nombre.";
					}
					if (empty($age)) {
						echo "El campo no puede estar vacío, ingrese su edad.";
					}
				}
				if (!empty($name) && !empty($age)) {
					if (!empty($name)) {
						if (preg_match($patron_texto, $_POST['name'])) {
							echo "Su nombre es: " . $_POST['name'] . "<br>";
							$a = 1;
						}else{
							echo "El campo nombre sólo puede contener letras y espacios" . "<br>";
						}
					}
					if (!empty($age)) {
						if (is_numeric($age)==true){
							if ($age>=18 && $age<=100){
								echo "Su edad es: " . $age . "<br>";
								$b = 1;
							}else {
								echo "La edad debe ser entre 18 y 100.";
							}
						}else {
							echo "El campo debe contener sólo números. Ingrese su edad en números.";
						}
					}
				}

				if ($a == 1 && $b == 1) {
					$conexion = mysqli_connect($host, $user, $pass, $db_name);

					if (mysqli_connect_errno()) {
						echo "Error al conectar con la Base de Datos";
					}

					mysqli_select_db($conexion, $db_name) or die ("No se encuentra la Base de Datos!");

					mysqli_set_charset($conexion, "utf-8");

					$sql = "INSERT INTO usuarios (id, nombre, edad) VALUES (null, '$name', $age)";

					//$result2 = mysqli_query($conexion, $sql);

					if (mysqli_query($conexion, $sql)) {
					    echo "New record created successfully!" . "<br>";
						echo "Usuario Registrado!" . "<br>";
					}else {
					    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
					}
					
					$query = "SELECT nombre FROM usuarios WHERE nombre = '$name' && edad = '$age'";

					$rs = mysqli_query($conexion, $query);
					while($row = mysqli_fetch_array($rs)) {

					   // Write the value of the column FirstName (which is now in the array $row)
					  echo $row[0] . "<br />";
					  //echo $row[1] . "<br />";
					}

					mysqli_close($conexion);
				}
			}

		?>

	</body>
</html>