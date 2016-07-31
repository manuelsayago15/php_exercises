<!DOCTYPE html>
<html lang="en">
	<head>
		<title>For loop</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>For Loop</h3>
		<?php
			//Testing For Loop
			//i=0 inicializo la variable desde donde quiero que parta. i<=10 es la condición, es decir, hasta ahí voy a llegar y cuando lo supere, me salgo del for. i++ es para incrementar de uno en uno. También puede ser i+=2 para incrementar de 2 en 2 por ejemplo. Se puede hacer lo mismo en decremento: i=10; i>=0; i-- es lo mismo pero en reversa, decremento, al revés a lo que se acostumbra.

			for ($i=0; $i<=10 ; $i++) {
				echo "<p> Testing For loop! Number $i</p>";					
			}

			//For en decremento

			for ($i=10; $i>=0 ; $i--) { 
				echo "<p> Testing <strong>For loop!</strong> (Decrease) Number $i</p>";	
			}

			//Salirse de un bucle for antes de que se supere la condición

			for ($i=0; $i<=15 ; $i++) { 
				echo "<p> I'm going out with number 8 </p>";
				if ($i==8) {
					echo "<p> Told ya' Number <b>$i</b> and me are going to watch a movie! </p>";
					break;
				}
			}

			echo "<hr>";

			//Doing a division with a for loop

			for ($i=10; $i>=-10 ; $i--) { 
				if ($i==0) {
					echo "<p> You can't divide number 0. </p>";
					continue; //Esta instrucción lo que hace es evitar que cuando $i valga 0, se ejecute la línea de abajo donde se divide (No ejecuta una iteración o vuelta en el bucle). Por lo tanto aquí se evade eso y se imprime el mensaje en inglés en vez de dividir por 0. Break y continue son esas instrucciones que sirven para salir a los coñazos (break) y continue para que no se ejecute una vuelta de un bucle for.
				}

				echo "9/$i = " . 9/$i . "<br>";
			}


		?>

	</body>
</html>