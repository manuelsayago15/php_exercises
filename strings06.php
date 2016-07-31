<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Strings</title>
		<meta charset="utf-8">
		<style type="text/css">
			.resaltar{
				color: grey;
				font-weight: bold;
			}
		</style>
	</head>
	<body>
		<?php
			echo "<p class='resaltar'>Esto es un ejemplo de frase</p>"; //Comillas anidades, las comillas dobles aquí son como las comillas padre y las comillas simples son como las hijas. 
			echo "<p class=\"resaltar\">Esto es el ejemplo con la barra invertida (Comillas anidadas)</p>";

			//Comparando Strings con strcmp y strcasecmp
			//strcmp 
			$var1 = "Buise";
			$var2 = "BUISE";

			$result = strcmp($var1, $var2); //Esta función devuelve 1 si no son iguales y devuelve 0 si son iguales. (Sí, es al revés y para poner las cosas como ya se conocen que 1 es true y que 0 es false, puedo negar la condición !$result)
			echo $result . "<br>";
			

			if($result){
				echo "No coinciden! <br>";
			}else{
				echo "Coinciden! <br>";
			}

			$result1 = strcasecmp($var1, $var2); //Devuelve lo mismo que la anterior pero esta no le importan las minúsculas y las mayúsculas
			echo $result1 . "<br>";

			if($result1){
				echo "No coinciden!";
			}else{
				echo "Coinciden!";
			}
		?>
	</body>
</html>