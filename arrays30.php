<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	//¿Qué es un array? Primero recordemos qué es una variable. Una variable es un espacio en la memoria de la computadora donde se almacena un valor, el cual puede cambiar (variar) en cualquier momento de la ejecución de un programa.
	
	//Un array también es un espacio en la memoria de la computadora donde a diferencia que una variable (que guarda solamente un valor) este puede guardar múltiples valores, no solamente uno. Podemos almacenar también, tal cual como en las variables, cualquier tipo de dato.

	/*Tipos de Array:
		Arrays Indexados: Son aquellos que utilizan índices para acceder o referirse a cada una de las posiciones que tiene un valor. índices: [0] [1] [2] [3] [4] [5] [6] [7]
		Recordar que posición e índice no son lo mismo. Posición 1, índice [0]

		Arrays Asociativos: Son aquellos que en vez de utilizar índices, utilizan "nombres" para referirse a cada una de las posiciones del array, "nombres" que asocian cada una de las posiciones. Se le puede dar el nombre que queramos.
	*/
	//Array Indexado: PHP permite no indicar el índice haciéndolo de esta forma pero igual puedes escribir los índices

	/*$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miércoles";
	echo $semana[1];*/

	$semana = array("Lunes","Martes","Miércoles","Jueves"); //array indexado, por qué? porque si quiero acceder a algunos de los elementos, necesito utilizar los índices
	echo $semana[3] . "<br>";

	"<hr>";
	//Array Asociativo
	//En este array asociativo podemos notar bien que no utilizamos índices, más bien
	$datos = array("Nombre" => "Manuel", "Apellido" => "Sayago", "Edad" => 25);
	"<br>";
	echo $datos["Apellido"];


?>
</body>
</html>