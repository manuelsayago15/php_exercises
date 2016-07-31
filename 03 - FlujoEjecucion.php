<!DOCTYPE html>
<html lang="en">
	<head> 
	<title>Flujo de Ejecución</title>
	<meta charset="utf-8">
	</head>
	<body>
		<h3>Flujo de Ejecución</h3>
		
		<?php
			/*Aquí puedo declarar mi función y en otro bloque llamar a esta función.
			function givemeData(){
				echo "This is a message from the function <br>";

			}
			*/
		?>

		<?php
			echo "This is the first message <br>";


			function givemeData(){
				echo "This is a message from the function <br>";

			}

			//include ('provideData.php'); //Incluyo un archivo externo con la función givemeData para probar que también puedo tener funciones en otros archivos y con esta línea la incluyo y luego la llamo donde la necesite.

			//require ('provideData.php'); Esta línea hace lo mismo que include pero no deja que todo lo que viene después de require se ejecute.

			givemeData();
			
			echo "This is the second message <br>";
		
		//El flujo de ejecución va de arriba hacia abajo y la llamada a las funciones puede hacerse donde sea. De hecho, puedo utilizar bloques de php y en uno de ellos, declarar mi función con todo lo que haga y luego en otro bloque php, hacer la llamada a esa función.
		?>
	</body>
</html>