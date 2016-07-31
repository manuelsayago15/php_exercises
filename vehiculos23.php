<?php

	class Car{ //Todo lo que está después de "var" son las propiedades que tiene el carro: ruedas, color, motor, etc. Son sus características
		//Encapsulando la variable o propiedad $wheels.
		private $wheels;
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
	//Esta vez sí hago la HERENCIA como debe ser.
	
	class Truck extends Car{
		//Método constructor. El constructor de una clase, va a indicar siempre el estado inicial de los objetos que pertenezcan a esta clase. Cuando veas una función dentro de una clase, con el mismo nombre de la clase, sabrás que es un método constructor.

		function Truck(){ //el $this es para hacer referencia a la misma clase. Es como si implícitamente estuviera escribiendo Car en vez de $this, le digo a mi programa que estoy hablando de la clase Car.
		//$this-> lo que hace es referenciar una propiedad o un método de la clase
			$this->wheels = 8;
			$this->color = "Gris";
			$this->motor = 2600;
		}

		//Sobreescritura de métodos. Sobreescribo el método que heredo de la clase Car. (Con el mismo nombre)
		function establece_color($truckcolor, $truckname){
			$this->color = $truckcolor;
			echo "El color de " . $truckname  . " es: " . $this->color . "<br>";
		}


		//Declaro la función arrancar de nuevo pero OJO, no estoy sobreescribiendo, porque voy a utilizar lo que tiene la función arrancar que se herede de la clase Car y a su vez voy a agregar algo más, pero cómo? Primero para utilizar lo que se está heredando pues uso la instrucción parent. ¿Para qué es esta instrucción? Parent lo que hace es llamar a la función de la clase padre (en este caso, la clase Car) y que ejecute lo que tiene dentro.
		function arrancar(){
			parent::arrancar();
			echo "Ya he arrancado! Yo soy el mensaje que usa el Parent :D";
		}
	}





?>