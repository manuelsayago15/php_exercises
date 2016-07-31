<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

	<?php

		include('vehiculos21.php');

		$mazda = new Car();
		$pegaso = new Truck();


		//Estas dos instrucciones imprimen lo que tiene cada objeto en sus respectivos atributos. Por ejemplo, arriba me creé el objeto mazda y el objeto pegaso, entonces aquí abajo imprimo y hago referencia a $mazda->wheels porque quiero saber cuántas ruedas tiene el mazda. ¿Dónde está el atributo wheels? pues en la clase Car dentro del archivo vehiculos21.php y sucede lo mismo con el pegaso.
		echo "El Mazda tiene: " . $mazda->wheels . " ruedas" . "<br>";
		echo "El Pegaso tiene: " . $pegaso->wheels . " ruedas" . "<br>";


	?>

	</body>
</html>