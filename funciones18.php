<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php

			//Funciones en PHP
			echo "Función predefinida de PHP <br>";
			$word = "MANUEL";
			echo strtolower($word);

			echo "<hr>";

			function sum($num1, $num2){
				$result = $num1+$num2;
				return $result;
			}
			echo sum(5,7);


			function upper($phrase, $convert=true){ //el convert=true es un parámetro por defecto (por defecto es true)
				$phrase = strtolower($phrase);
				if($convert==true){
					$value = ucwords($phrase);
				}else{
					$value = strtoupper($phrase);
				}

				return $value;
			}
			echo "<hr>";
			echo upper("This is a test!");
		?>		

	</body>
</html>