<!DOCTYPE html>
<html>
	<head>
		<title>Getters and Setters</title>
	</head>
	<body>
	<?php
		include('vehiculos24.php');
		$mazda = new Car();
		$pegaso = new Truck();

		echo "EL mazda tiene " . $mazda->get_wheels() . " ruedas<br>";
		echo "EL pegaso tiene " . $pegaso->get_wheels() . " ruedas<br>"; //Si quisiera saber las ruedas del objeto tipo camión, uno piensa que buen, como ya tengo un getter que me consigue el valor de la variable encapsulada entonces nada, hago esto mismo y listo pero al revisar el resultado en el navegador, podemos notar que aunque no da error, el resultado no se imprime, por qué? Simplemente porque está encapsulado, lo que sucede es que al tener el "private" solamente se puede acceder dentro de esa misma clase, por lo tanto un objeto de tipo camión es otra clase diferente y no hay forma de acceder por allí si sigue siendo private, incluso que la clase camión hereda propiedades y funciones/métodos de la clase Carro, incluyendo el getter y todo pero el private no permite acceso. La solución es utilizar el modificador de acceso "protected", este permite que nadie desde afuera pueda acceder de igual forma que el private pero este a su vez permite que los que heredan la clase, puedan tener acceso.

		echo "EL mazda tiene un motor de " . $mazda->get_motor() . " cc<br>";



	?>
	</body>
</html>