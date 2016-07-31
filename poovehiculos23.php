<!DOCTYPE html>
<html>
	<head>
		<title>Encapsulación</title>
	</head>
	<body>
	<?php
	/* Modularización en Programación Orientada a Objetos significa, dividir el código en partes, es decir, se trabaja en forma de módulos con la finalidad de dividir el programa o aplicación en partes lo cual va a permitir la facilidad del desarrollo del mismo. Se evita tener un código gigante con todas las cosas, si es modular, estará divido y será más cómodo para trabajar. Al final todas estas partes se unen y así se crea una aplicación de una manera más cómoda. 

	Partiendo de este concepto, aparece la Encapsulación y esta consiste en que los diferentes objetos o clases que forman parte de un programa tengan características encapsuladas para que solamente puedan ser accedidas desde el propio objeto o desde la propia clase. Todos los objetos deben encapsular propiedades y funcionalidades. Hay propiedades de estos objetos que sólo deben ser accesibles desde el propio objeto, sin embargo estos objetos también deben tener propiedades y funcionalidades que deben ser accesibles desde cualquier sitio. Los objetos deben encapsular algunas propiedades pero hay otras que no las deben encapsular para que sí se pueda acceder a ellas desde el exterior.

	Modificadores de Acceso:

	*Public (Accesible desde cualquier parte): Cuando una variable o un método lo declaras público quiere decir que puedes acceder a esa propiedad o a esa función desde cualquier otra parte de tu programa.  

	*Private (Accesible desde la propia clase): Se utiliza para encapsular. Cuando se habla de propiedad o método encapsulado, quiere decir que le hemos aplicado el private. Con esto conseguimos que con esa propiedad o método, sólo sea accesible desde el propio objeto. 

	*Protected (Accesible desde la propia clase y clases heredadas): Cuando declaras una propiedad o funcionalidad de un objeto protected, haces que sea accesible desde la propia clase pero también desde clases que hereden del objeto en cuestión.
	
	Centrándonos en este ejemplo del carro. Es ilógico que se tenga la propiedad "wheels" con más de 4 ruedas, por lo tanto, debemos estar pendientes en que este valor no pueda ser modificado porque los carros tienen 4 ruedas... Sin aplicar modificadores de acceso en este programa, podemos darle valor a las ruedas y decir que $wheels=7 y el programa responderá que son 7 ruedas, es decir, editamos el estado inicial que le pusimos en el constructor.
	


	*/
		include('vehiculos23.php');

			$mazda = new Car();
			$pegaso = new Truck();

			$mazda->wheels=7; //Dejando esto así sin modificadores de acceso, podré fijarme que efectivamente dice que tiene 7 ruedas. ¿Cómo evitar esto? Pues encapsulando la propiedad ruedas. Ahora, vamos al archivo incluído con la instrucción include y allá editamos la propiedas o variable wheels y se le agrega el modificador de acceso, PRIVATE. Con esto se encapsula la variable wheels del objeto Carro. Y ahora qué? Pues conseguimos que esa variable sólo sea accesible desde su propia clase (carro). Por lo tanto que esta instrucción: $mazda->wheels=7 no va a funcionar y dará un error de que no se puede acceder. EL siguiente problema es que a continuación vemos unas instrucciones para imprimir las ruedas del carro y el camión pero el problema es que la variable wheels ya no es accesible desde afuera por lo tanto, esto generará un error ya que wheels está encapsulada. LO que se necesita aquí son los GETTERS Y SETTERS. Revisar el siguiente ejercicio para aclarar esto, :D

			//Estas dos instrucciones imprimen lo que tiene cada objeto en sus respectivos atributos. Por ejemplo, arriba me creé el objeto mazda y el objeto pegaso, entonces aquí abajo imprimo y hago referencia a $mazda->wheels porque quiero saber cuántas ruedas tiene el mazda. ¿Dónde está el atributo wheels? pues en la clase Car dentro del archivo vehiculos21.php y sucede lo mismo con el pegaso.
			echo "El Mazda tiene: " . $mazda->wheels . " ruedas" . "<br>";
			echo "El Pegaso tiene: " . $pegaso->wheels . " ruedas" . "<br>";

			//$pegaso->frenar();
			echo "El pegaso es de color: " . $pegaso->color . "<br>";
			echo "El motor del mazda es de: " . $mazda->motor . "<br>";
			echo "El motor del Pegaso es de: " . $pegaso->motor . "<br>";
	?>
	</body>
</html>