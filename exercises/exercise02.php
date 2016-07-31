<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 2</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form name="form1" method="post" action="#"> <!-- action tenía calculadora.php -->

		    <label for="num1"></label>
		    <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">
		    <input type="text" name="num1" id="num1" placeholder="Ingresa un valor">
		   	
		    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

		</form>

		<?php
			if(isset($_POST["button"])){

				$name = $_POST["name"];
				$num = $_POST["num1"];
				
				echo "Tu nombre es: " . $name . "<br>";
				echo "El valor que ingresaste es: " . $num . "<br>";


			}






		?>



	</body>
</html>