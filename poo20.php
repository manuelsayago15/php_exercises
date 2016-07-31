<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Programación Orientada a Objetos</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			//POO, clase - objeto - instancia

			//Creo una clase, y en este caso será la clase carro que tendrá todos los tipos de carros y sus atributos (caractérísticas, propiedades) que se me ocurran

			class Car{ //Todo lo que está después de "var" son las propiedades que tiene el carro: ruedas, color, motor, etc. Son sus características
				var $wheels;
				var $color;
				var $motor;

				//Método constructor. El constructor de una clase, va a indicar siempre el estado inicial de los objetos que pertenezcan a esta clase. Cuando veas una función dentro de una clase, con el mismo nombre de la clase, sabrás que es un método constructor.

				function Car(){ //el $this es para hacer referencia a la misma clase. Es como si implícitamente estuviera escribiendo Car en vez de $this, le digo a mi programa que estoy hablando de la clase Car.
				//$this-> lo que hace es referenciar una propiedad o un método de la clase
					$this->wheels = 4;
					$this->color = "";
					$this->motor = 1600;
				}


				//Las siguientes funciones o métodos se refieren al comportamiento, la funcionalidad, lo que pueden hacer. Métodos. (Función y método son sinónimos siempre y cuando la función se encuentre dentro de la clase)
				function arrancar(){
					echo "Estoy arrancando! <br>";
				}

				function girar(){
					echo "Estoy girando! <br>";

				}

				function frenar(){
					echo "Estoy frenando! <br>";

				}


			}

			//Creo que instancias de la clase y esto es como el tipo de carro que pondré. Instancia mazda de la clase carro y lo mismo para los demás.

			$mazda = new car(); //Estado inicial al objeto o instancia
			$chevrolet = new car();
			$fiat =  new car();

			$mazda->girar();
			$chevrolet->frenar();
			$fiat->arrancar();

		?>

	</body>
</html>