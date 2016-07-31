<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Constantes</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Constantes en PHP</h3>
		<?php
		//Definiendo una constante: 
		//Debe ser en mayúsculas (recomendado), se puede hablitiar en case-sensitive, si se le da el valor true, pueden escribirse en mayuscula o minuscula.
		//Se declara sin el $ y no puede imprimirse dentro de un string, se debe concatenar

		define("AUTOR", "Manuel", true);

		//Se me ocurre cambiarle el valor a la constante, ¿cómo hago?
		//Dándole ese valor true en la constante ya le digo que puedo escribir AUTOR o autor, entonces si declaro la constante con otro valor (tiene que ser de la misma manera) y lo imprimo, me devolvería Luisana en vez de Manuel, ¿por qué? porque con el true es como separar mayúsculas de minúsculas en este caso de cambiarle el valor a la constante.

		define("AUTOR", "Luisana");

		//Imprimo el valor de la constante:
		echo "El valor de la constante es: " . AUTOR . "<br>";

		//Si imprimo el valor de la constante, escribiendo su nombre en minúsculas
		echo "El valor de la constante (en minúscula) es: " . autor . "<br>";

		//Constantes predefinidas

		echo "Esta instrucción está en la línea: " . __LINE__ . "<br>"; //Constante predefinida de PHP

		echo "Estoy trabajando con: " . __FILE__; //Constante predefinida de PHP

		?>




	</body>
</html>