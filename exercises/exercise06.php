<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 4</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<form name="form1" method="post" action="#"> <!-- action tenía calculadora.php -->

		    <label for="num1"></label>
		    <input type="text" name="num1" id="num1" placeholder="Type a number">
		   	
		    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

		</form>

		<?php
			if(isset($_POST["button"])){
				$num1 = $_POST["num1"];
				$value = $num1*3;

				echo "Your number was: " . $num1 . "<br>";
				echo "Your number three times is: " . $value;
			}




		?>
	</body>
</html>