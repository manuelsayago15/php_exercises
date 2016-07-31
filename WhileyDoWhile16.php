<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bucles While y Do While</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Bucles While y Do While</h3>
		<?php
			//While loop
			//El while se repite mientras la condición se cumpla y se detiene hasta que la condición sea mentira. Por eso el $var1++ para que en cada vuelta se vaya llenando y supere la condición y se salga del ciclo.
			$var1 = 1;
			$i = 1;
			while ($var1<=8) {
				echo "Testing the While loop '$i' <br>";
				$var1++;
				$i++;
			}

			echo "I'm a string that is out of the while loop";

			echo "<hr>";

			//Do-While loop
			//Este ciclo Do-While es lo mismo que el anterior pero ejecuta por lo menos una vez todo el código que esté dentro de él antes de ejecutar la condición.
			$var2 = 1;
			$j = 0;
			do{
				echo "Testing Do-While loop '$j' ";
				$j++;
				$var2++;

			}while($var2<5);




		?>



	</body>
</html>