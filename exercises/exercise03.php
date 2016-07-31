<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 3</title>
		<meta charset="utf-8">
	</head>
	<body>

		<form name="form1" method="post" action="#"> <!-- action tenía calculadora.php -->

		    <label for="num1"></label>
		    <input type="text" name="name" id="name" placeholder="Ingresa tu nombre">
		    <input type="text" name="CI" id="CI" placeholder="Ingresa tu CI">
		   	
		    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

		</form>
		<?php
			if(isset($_POST["button"])){
				$name = $_POST["name"];
				$card = $_POST["CI"];

				echo "Your name is: " . $name . "<br>";
				echo "Your ID Card is: " . $card . "<br>";

			}



		?>

	</body>
</html>