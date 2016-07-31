<?php

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

		function establece_color($carcolor, $carname){
			$this->color = $carcolor;
			echo "El color de " .$carname  . " es: " . $this->color . "<br>";

		}


	}

	//*******************************************************************************************************************
	//Esta línea de separación se hizo sólo para probar dos clases diferentes pero similares en cuanto a los atributos, ya que una es para crear carros y la otra para crear camiones. Esto fue un copy and paste LITERAL, pero sólo para demostrar eso.
	
	class Truck{ //Todo lo que está después de "var" son las propiedades que tiene el carro: ruedas, color, motor, etc. Son sus características
		var $wheels;
		var $color;
		var $motor;

		//Método constructor. El constructor de una clase, va a indicar siempre el estado inicial de los objetos que pertenezcan a esta clase. Cuando veas una función dentro de una clase, con el mismo nombre de la clase, sabrás que es un método constructor.

		function Truck(){ //el $this es para hacer referencia a la misma clase. Es como si implícitamente estuviera escribiendo Car en vez de $this, le digo a mi programa que estoy hablando de la clase Car.
		//$this-> lo que hace es referenciar una propiedad o un método de la clase
			$this->wheels = 8;
			$this->color = "Gris";
			$this->motor = 2600;
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

		/*function establece_color($carcolor, $carname){
			$this->color = $carcolor;
			echo "El color de " .$carname  . " es: " . $this->color . "<br>";

		}*/


	}





?>