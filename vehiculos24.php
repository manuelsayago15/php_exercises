<?php
	class Car{
		//Encapsulando la variable o propiedad $wheels.
		/*
		Los métodos SETTER sirven para modificar las propiedades de un objeto.
		Los métodos GETTER sirven para ver las propiedades de un objeto.

		*/
		//private $wheels;
		protected $wheels;
		var $color; //Si no pongo public no pasa nada, se sobreentiende que es public sin la necesidad de escribirlo. Y public significa que tiene acceso desde cualquier parte del programa.
		protected $motor;

		//Método constructor. El constructor de una clase, va a indicar siempre el estado inicial de los objetos que pertenezcan a esta clase. Cuando veas una función dentro de una clase, con el mismo nombre de la clase, sabrás que es un método constructor.

		function Car(){ //el $this es para hacer referencia a la misma clase. Es como si implícitamente estuviera escribiendo Car en vez de $this, le digo a mi programa que estoy hablando de la clase Car.
		//$this-> lo que hace es referenciar una propiedad o un método de la clase
			$this->wheels = 4;
			$this->color = "";
			$this->motor = 1600;
		}

		//En cualquier parte del código después de haberle dado el estado inicial creamos un método o función:
		//EL get es por convención ya que es de tipo getter. Esta función lo único que tiene que hacer es devolvernos el número de ruedas que tiene un objeto de este tipo.
		function get_wheels(){
			return $this->wheels;

		}
		//Un getter para el valor del motor en la clase Car. Recordar que se cambió la variable motor a "protected"
		function get_motor(){
			return $this->motor;
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