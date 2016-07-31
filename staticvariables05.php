<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Variables Estáticas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			function increaseVariable(){
				static $count = 0; //El static antes de la variable, sirve para declarar la variable como estática y esto sirve para que el valor de dicha variable se conserve, se mantenga. Hay que recordar que cuando una función termina de ejecutarse, el valor de sus variables internas, es decir, sus variables locales, se destruye, se pierde. En esta línea donde declaré la variable, se ejecutará la primera vez que llame a la función. Se conserva el valor de la variable e incrementa cada vez que la función es llamada. 


				//Si por ejemplo, yo no pongo el static y declaro la variable normal, en el momento de las llamadas a la función que hago 4 veces, el valor no se aumenta y me mostraría el valor 1, cuatro veces.
				$count++;

				echo $count . "<br>";
				
			}

			increaseVariable();
			increaseVariable();
			increaseVariable();
			increaseVariable();


		?>
	</body>
</html>