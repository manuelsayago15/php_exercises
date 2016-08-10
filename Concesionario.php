<?php
	
	//Se podría pensar que no es necesario crear una variable static para darle ayuda o descuento a los compradores de los carros pero eso nos obligaría a tener que hacerle el descuento a cada uno de los clientes de forma manual, es decir, si la variable ayuda fuera NO estática, antes del precio final deberíamos decir $compra_Antonio->$ayuda=4500 y así para los demás compradores. De igual manera si creamos un método que haga el descuento (un método no estático OJO), estamos obligados a aplicar el descuento para cada una de las instancias, entonces imagínense que sean 20 o más compradores... escribir 20 veces una misma línea de código pues puede ser molesto, por lo tanto aquí tiene sentido crear una variable o método estático que se aplique, que sea compartido por todas las instancias pertenecientes a esa clase. 


	class Compra_vehiculo{
		
		private $precio_base;
		
		//Se comenta la variable static $ayuda=4500 porque esto es parte del video 29 del curso de PHP y la crearemos de nuevo pero como private. Se hace este comentario nada más para guardar cada paso hecho en el video y por eso se comenta la variable que ya tenía su previa explicación en el video 28.
		
		private static $ayuda=0; //Antes estaba en 4500 pero se inicializa en cero para resolver por un método estático.

		//Esta variable declarada como private bloquea lo que es el poder manipular esta variable y darle un nuevo valor para que sea más descuento (tomando en cuenta que este ejemplo es referido a que la ayuda la da el gobierno y aplica para todos los compradores). Es accesible desde la propia clase utilizando el operador self pero no será accesible desde fuera de la clase 


		//static $ayuda=4500; //Esta variable es estática y pertenece solamente a la clase, en este caso, la clase Compra_Vehiculo por lo tanto NO PERTENECE A NINGÚN OBJETO. En este ejemplo, no pertenece a los objetos $compra_Antonio y $compra_Ana
		
				
		function Compra_vehiculo($gama){ //El constructor aquí recibe un parámetero $gama
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		//Método estático. Es un método que pertenecerá a esta clase a no a ninguna instancia.

		//Este es un método estático y por lo tanto pertenece a la clase y no pertenece a ninguna instancia por lo tanto no puedo hacer esto: $compra_Ana
		static function descuento_gobierno(){
			//Suponiendo que la ayuda es por fechas y al gobierno le da la gana de darla cada entre el primer enero y junio y entre julio y el resto del año entonces podemos hacer lo siguiente: date es una función de php y se debe usar tal cual su nomenclatura: date("m-d-y")
			if(date("m-d-y")>"09-01-16"){ //Se cumplirá o no dependiendo de la fecha

				self::$ayuda=4500;
			}
		}
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda; //Recordar que el operador $this hace referencia al objeto que estemos creando en cada momento, por ejemplo $compra_Antonio, $compra_Ana
			//Para hacer referencia a un campo o variable estática, utilizamos self::
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>