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
		    <input type="text" name="num2" id="num2" placeholder="Type a number"><br><br>
		   	
		    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

		</form>

		<?php
			if(isset($_POST["button"])){
				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$value = $num1*$num2;

				echo "Your first number was: " . $num1 . "<br>";
				echo "Your second number was: " . $num2 . "<br>";
				echo "The multiplication of both numbers is: " . $value;
			}




		?>
	</body>
</html>