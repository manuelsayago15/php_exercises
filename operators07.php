<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Operators</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			$var1 = 11;
			$var2 = "11";
			$var3 = "Manuel";

			//Comparando variables:
			echo "Comparando con el operador: ==" . "<br>";
			if ($var1==$var2) {
				# code...
				echo "Las variables son iguales!";
			}else{
				echo "Las variables no son iguales!";
			}

			echo "<hr>";

			echo "Comparando con el operador ===" . "<br>";
			if ($var1===$var2) { //Recordar que === lo que hace es comparar tanto el valor de ambas variables como el tipo de ambas variables, si estas dos condiciones se cumplen entonces es verdadero.
				# code...
				echo $var1 . " y " . $var2 . "<br>";
				echo "Las variables son iguales! Mismo valor y mismo tipo!" . "<br>";
			}else{
				echo $var1 . " y " . $var2 . "<br>";
				echo "Las variables no son iguales!" . "<br>";
			}

			echo "<hr>";
			echo "Comparando con el operador: !=" . "<br>";
			if ($var1!=$var2) { //Aquí simplemente comparo si $var1 es diferente de $var2
				# code...
				echo "Los valores son diferentes";
			}else{
				echo "Los valores no son diferentes";
			}

		?>
	</body>
</html>