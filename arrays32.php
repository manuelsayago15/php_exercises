<!DOCTYPE html>
<html>
<head>
	<title>Arrays Multidimensionales</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	//Arrays Multimensionales
	//Este tipo de Arrays son iguales que los anteriores pero estos arrays contienen otros arrays dentro de sí mismos, lo que va creando la dimensión, ejemplo:
	/*Tengo un array llamado $alimentos y este tiene 3 elementos que son:
	fruta, leche, carne. Pero a su vez estos 3 elementos tienen más elementos dentro de sí, por lo tanto eso forma la segunda dimensión. Los arrays multidimensionales se suelen colocar de esta manera porque es mejor a nivel visual. Seguir la sintaxis como en el ejemplo siguiente; 
	*/

	$alimentos = array("fruta"=>array("tropical"=>"kiwi", 
									  "cítrico"=>"mandarina",
									  "otros"=>"manzana"),
					   "leche"=>array("animal"=>"vaca",
					   				  "vegetal"=>"coco"),
					   "carne"=>array("vacuno"=>"lomo",
					   				  "porcino"=>"pata"));

	echo $alimentos["carne"]["vacuno"];

	echo "<hr>";

	//Aquí vamos a listar los elementos del array multidimensional
	//Creando el foreach para recorrer los elementos de este array
	//Como son dos dimensiones, debemos crear una variable que represente cada dimensión, entonces la variable $key_alimen representa a la primera dimensión del array y $alim es el nommbre que identifica a la segunda dimensión que a su vez esn un array

	foreach ($alimentos as $key_alimen => $alim) {
		echo "$key_alimen: " . "<br>";
		//Como en la primera vuelta del foreach se imprimirá "fruta" se quiere que abajo de fruta aparezcan los 3 elementos que tiene que son kiwi, mandarina y manzana entonces como es un array hay que desdoblarlo y haremos uso de la función list de PHP. (Se hará con un while pero hay muchas formas de hacer esto). Tenemos que crear un nombre que identifique el primer elemento (el nombre asociativo, clave, (en este caso "tropical", "cítrico", etc.) del array de la segunda dimensión y otra para el elemento en sí (kiwi, mandarina, manzana, etc.)

		//aquí le estamos diciendo que por cada $alim saque su valor $clave y su valor $valor, es decir, $alim es todo el array de la segunda dimensión y el primero es $clave=tropical y $valor = kiwi y así sucesivamente. Esto lo hará mientras haya elementos en la lista

		while(list($clave, $valor) =  each($alim)){
			echo "$clave=$valor <br>";

		}
		echo "<br>";
	}

	echo "<hr>";
	//Se puede hacer lo anterior con una función de PHP llamada var_dump

	echo var_dump($alimentos);
?>
</body>
</html>