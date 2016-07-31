<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Variables en PHP</h3>
		<?php
			/* Una variable es un valor que se almacena en un espacio de la memoria del PC. Se llama variable porque el valor puede cambiar en cualquier momento y parte del programa.
			*/
			$nombre = "Manuel"; //Declaro una variable en PHP, no es necesario especificar el tipo de variable como en Java o C++. Aquí como es un nombre, utilizo las comillas. Es de tipo String.
			$lastname = "Sayago";
			$edad = 25;
			print "El nombre es: " . $nombre . "<br>"; //Aquí imprimo el nombre que está almacenado en mi variable $nombre pero estoy concatenando con el punto. Es recomendable dejar los espacios que hay entre el punto.
			print "El apellido es: $lastname <br>"; //Aquí me evito concatenar e imprimo el valor de la variable directamente pero OJO, utilizando las comillas dobles.
			print 'Imprimiendo con comillas simples: El nombre es $nombre. (No sirve) <br>';
			/*Se pueden utilizar comillas simples pero en la línea anterior se puede observar la diferencia. Por otro lado puedo utilizar comillas anidadas, comillas simples dentro de comillas dobles.
			Si guardo un valor string en una variable pero no le pongo las comillas, me dará error, ejemplo: Notice: Use of undefined constant Manuel - assumed 'Manuel'
			$nombre = Manuel; Cree que es una constante y da error porque si fuese constante, está mal definida.
			*/

			echo "Me llamo " . $nombre . " " . $lastname . " y tengo $edad años de edad. <br>";
			//La diferencia entre print y echo es que print viene siendo una función y echo una expresión. Por otro lado, print devuelve el valor 1 y por lo tanto realiza más procesos por debajo y "se tarda" más que echo. La más usada y común es echo para imprimir.
			//echo permite esto: echo $nombre, $lastname; print no puede hacerlo.
		?>
	</body>
</html>