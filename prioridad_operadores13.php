<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Prioridades de Operadores</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			$var1 =  true;
			$var2 = false;
			$result = $var1 && $var2; //Si var1 y var2 son verdaderas, se guarda true en result, pero si alguno de los dos es false o los dos son false, obviamente se guardará false.

			//Revisar la prioridad que tienen los operadores en: http://php.net/manual/en/language.operators.precedence.php
			//Notar que &&, = y AND tienen diferente prioridad.

			if ($result==true) {
				echo "Correcto";
			}else{
				echo "Incorrecto";
			}

			//Comprobando que en esta condición el operador and hace que arroje otro resultado en comparación a &&
			echo "<hr>";
			$result = $var1 and $var2; //primero va el igual y después el and, es lo mismo que en matemática, si no usas paréntesis, todo se va a la shit.

			if ($result==true) {
				echo "Correcto";
			}else{
				echo "Incorrecto";
			}



		?>
	</body>