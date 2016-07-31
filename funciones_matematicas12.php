<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Funciones Matemáticas</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			//Función rand para números aleatorios. Leer más en php.net
			$num1 = rand(10,80);

			echo "El número aleatorio es: $num1" . "<br>";

			//Función pow para calcular la potencia de un número

			$num2 = pow(5,3);

			echo "La potencia de 5^3 es: " . $num2 . "<br>";
			
			//Función round para redondear.

			$num3 = 11.15;
			$num4 =  11.15478887709;
			echo "El número es: " . round($num3) . "<br>"; //11.15 redondeado me da 11 y si tuviera 11.7 me daría 12.
			echo "El número es: " . round($num4, 4) . "<br>"; // Con el número 4 dentro del paréntesis, especifico que quiero sólo 4 decimales nada más y esto rondea también, obviamente.

			//En PHP esl casting es mucho más sencillo que en otros lenguajes. Esto se refiere al cambio de tipo de variable. Existen dos tipos de casting en PHP: Casting implícito y Casting explícito.

			//Casting Implícito: 

			$num1 = "5"; //Aquí esta variable es de tipo string
			$num1+=2; //Esto es para incrementar su valor en 2 pero ¿qué pasa? que se cambia a una variable de tipo entero de manera implícita, esto es dinámico y es algo propio del lenguaje.
			$num1+15.07; //Aquí ya la variable $num viene siendo de tipo float, porque implícitamente sabe que lo está sumando con un valor flotante.

			//Casting explícito: 
			$num2 = "11"; //$num2 es de tipo string y en algún momento quiero cambiar el tipo de variable y guardarlo en otra variable, por lo tanto, debo especificar el tipo de variable al que quiero cambiar:
			$result = (int)$num2;

		?>


	</body>
</html>