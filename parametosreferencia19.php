<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Parámetros por valor y por referencia!</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Parámetros por valor</h3>
		<?php
			//Parámetros por valor
			function Porvalor($num1){
				$num1++;
				return $num1;
			}
			$a = 5;
			echo "Valor antes de llamar a la función: " . $a . "<br>";
			echo "Valor después de llamar a la función y pasarle el valor de a: " . Porvalor($a) . "<br>";
			echo "<hr>";
			function suma($num1, $num2){
				$result = $num1+$num2;
				return $result;
			}
			$num1 = 5;
			$num2 = 5;
			echo suma($num1, $num2); //1*
			echo "<hr>";
			//Parámetros por Referencia
			echo "<h3>Parámetros por Referencia</h3>";
			$a = 10;
			function PorReferencia(&$a){
				$a = $a*2;
				return $a;
			}
			echo "Antes de llamar a la función 'a' vale: " . $a . "<br>";


			echo "Al llamar a la función 'a' vale: " . PorReferencia($a) . "<br>";
			echo "Después de llamar a la función, el valor es " . $a . " porque se envió por referencia y se pudo cambiar el principal.";
			/*El asunto aquí es el siguiente. Pasar parámetros por valor es sencillo porque simplemente en el momento en el que se llama a la función, ahí se le envían los parámetros que se necesiten (obviamente en la función ya deben estar definida la cantidad de parámetros a recibir y dentro de la misma ejecutar lo que se tenga que hacer y devolver el valor con el return) y cuando el valor sea retornado pues en esa sentencia se verá el resultado 1*

			Por otra parte, cuando es por referencia, se utiliza el & delante del parámetro EN LA FUNCIÓN para indicar que es por referencia. Esto lo que hace es cambiar el valor de la variable en juego y crear una conexión entre el parámetro de la función (el que recibe) y el parámetro que se envía con el fin de no perder el valor cuando se salga de la función, ya que los valores dentro de una función se pierden cuando esta se termina.
			*/
		?>

	</body>
</html>