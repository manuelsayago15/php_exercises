<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ámbito de Variables</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php

			$name =  "Luisana";

			/*function givemeName{
				global $name;
				$name = "Manuel";
			}*/
			include ('anotherData04.php');
			givemeName();

			echo $name;
			/*	¿Cuál nombre se imprime aquí? Luisana o Manuel?
			Se imprime Luisana. ¿Por qué? Simplemente porque aunque las variables tienen el mismo nombre, name, son diferentes porque una está en el bloque de php y la otra está DENTRO de la función declarada, por lo tanto aunque la función es llamada y todo, se seguirá imprimiendo "Luisana". Esto es diferente de otros lenguajes de programación y es así porque se evita que haya conflictos con códigos de otros desarrolladores por si tienen los mismos nombres de variables, por ejemplo.

			Por otra parte, se puede declarar una variable GLOBAL DENTRO DE LA FUNCIÓN, para que pueda ser utilizada afuera y allí cambiar los valores. Uno puede pensar que entonces puedo declarar una variable global afuera de la función y utilizarla dentro, pues no se puede por la misma razón de asegurarse que si se utilizan archivos externos desarrollados por otros programadores, se evitan la confusión y el hecho de sobreescribir valores de variables con nombres iguales.
			*/






		?>
	</body>
</html>