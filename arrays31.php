<!DOCTYPE html>
<html>
<head>
	<title>Arrays II</title>
	<meta charset="utf-8">
</head>
<body>
<h3>Array Asociativo</h3>
<?php

	//La función is_array es para comprobar si es un array. Si es así, la función devuelve el valor true, de lo contrario false, obviamente.
	$datos = array("Nombre" => "Manuel", "Apellido" => "Sayago", "Edad" => 25);
	//$datos = "Lu";

	if (is_array($datos)) {
		echo "Es un array";
	}else{
		echo "No es un array";
	}
?>

<hr>

<?php
	//Aquí vamos a recorrer Arrays asociativos. Vamos a recorrer los elementos de un array. Esto se trata de imprimir todos los valores que están dentro de una array. A diferencia de cuando rescatamos la posición [i] de un array o la posición "Apellido" para arrays asociativos. En estos casos necesitamos recorrer el array con un bucle, desde el primer elemento hasta el último. Los arrays indexados se recorren con un bucle for a través de sus índices. Con los asociativos, las posiciones van marcadas por una serie de "claves" como por ejemplo: "Nombre", "Apellido", etc.) Para recorrer esto en PHP utilizamos el bucle foreach. El foreach permite recorrer arrays asociativos. Se construyen así:

	// la palabra foreach, $elnombredelarray, la palabra as y a continuación un nombre cualquiera que se define como clave (key), debido a que las claves o nombres con los que identificamos los valores dentro de un array asociativo, se consideran claves y por eso cuando se forma el ciclo foreach por defecto en sublime text, está esa palabra $key. Después de eso el símbolo => y luego otra variable más que va a representar a los valores del array asociativo.
	
	//Ejemplo del array al principio de este programa.
	//Claves: "Nombre","Apellido","Edad"; Estos serán representados por una variable con cualquier nombre después de la palabra "as" dentro del foreach
	//Valores: "Manuel","Sayago",25; Estos serán representados por una variable con cualquier nombre después del símbolo "=>"
	
	foreach ($datos as $key => $value) {
		echo "A $key le corresponde $value <br>";
	}


?>

<hr>

<?php
	//Recorriendo un Array Indexado a través de los índices usando el ciclo for de siempre.
	
	$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miércoles";
	$semana[] = "Jueves";

	for ($i=0; $i<4;$i++) { 
		echo $semana[$i] . "<br>";
	}

	//Suponiendo que no sabemos cuantas posiciones tiene el array porque de repente hemos ido agregrando más elementos al array a lo largo del programa. For i=0 mientras que i sea menor que los elementos del array, i++

	for ($i=0; $i<count($semana);$i++) { 
		echo $semana[$i] . "<br>";
	}

?>

<hr>

<?php
	//Agregando elementos al array indexado. No sabemos en qué posición debe ir el nuevo elemento o mejor dicho, no sabemos cuántos elementos tiene el array, entonces no le ponemos el índice.

	$semana[] = "Viernes"; //Agrega este elemento en el array $semana pero al final del mismo.

	for ($i=0; $i<count($semana);$i++) { 
		echo $semana[$i] . "<br>";
	}
?>

<hr>

<?php
	//Agregar un elemento a un array asociativo.
	$datos = array("Nombre" => "Manuel", "Apellido" => "Sayago", "Edad" => 25);
	//Es de forma similar al agregar elementos a un array indexado, aquí ponemos lo que viene siendo la "clave" entre corchetes igual al valor que tendrá ese nuevo elemento.
	$datos["País"] = "Venezuela";
	//El foreach para que podamos ver como recorre todos los elementos del arreglo
	foreach ($datos as $key => $value) {
		echo "A $key le corresponde $value <br>";
	}

?>
<hr>
<h3>Ordernando Arrays</h3>
<?php
	// Ordernar array Indexado

	$semana = array("Lunes","Martes","Miércoles","Jueves");

	sort($semana);

	for ($i=0; $i<count($semana); $i++) { 
		echo $semana[$i] . "<br>";
	}


?>


</body>
</html>