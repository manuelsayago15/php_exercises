<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<!-- Variables Estáticas y Métodos Estáticos 
	Para saber sobre variables y métodos estáticos, primero debemos saber cómo funcionan las variables y métodos no estáticos. Entre los métodos no estáticos:
	Imaginemos que creamos una Clase1, definimos unos métodos y unas variables que no son estáticos como se ha hecho hasta antes de este ejercicio. ¿Qué sucede cuando creamos instancias u objetos que pertenecen a la Clase1 que creamos? 
	Creamos una instancia/objeto:
	$obj1= new Clase1(); (método 1, método 2, método 3 y campo 1, campo 2, campo 3)
	$obj2= new Clase1(); (método 1, método 2, método 3 y campo 1, campo 2, campo 3)

	Así podríamos crear todas las instancias que quisiéramos que sean pertenecientes a la clase1. Cuando creamos una o varias instancias pertenecientes a una clase, ¿qué es lo que ocurre realmente con los objetos y campos(variables) de esa clase? Cada una de las instancias u objetos se queda con una copia de esos métodos y campos (variables). Por ejemplo, los objetos 1 y 2 que se crearon arriba, contienen una copia de cada método y cada campo(variable) entonces, el $obj1 cuenta con un método 2 independiente y $obj2 cuenta con un método 2 independiente (Cada objeto/instancia cuenta con una copia de métodos y variables). 

	¿Qué quiere decir esto? Que estos métodos pueden comportarse de manera diferente para cada uno de estos objetos o instancias. Si tuviéramos 30 objetos, cada uno de ellos tendría su propia copia del método 2. Ese método podría comportarse de manera diferente para cada uno de esos 30 objetos. Lo mismo pasaría con los demás métodos y campos/variables. Si no son estáticos, cada uno de esos campos o variables y cada uno de esos métodos se puede comportar de forma diferente para cada uno de esos objetos.

	¿Qué pasaría si dentro de la clase definimos uno de los métodos como estático? Por ejemplo, el método 2 de la Clase 1 lo definimos como estático, bueno, entonces cambia por completo el comportamiento de este método 2 para cada uno de los objetos/instancias. Cuando dices que un método es estático, quiere decir que ese método pertenece únicamente a la clase donde se ha creado. En este caso pertenecería a la clase 1 y esto a su vez quiere decir que ninguno de los objetos o instancias que puedas crear pertenecientes a esta clase, tiene copia de el método 2, es decir, estos objetos ya no tendrían su propia copia del método 2.

	El método sería ahora un método compartido por todas las instancias u objetos que puedas crear de la clase 1. Si tenemos dos objetos o instancias, quiere decir que este método 2 es compartido por los objetos. No es que cada uno de ellos tiene una copia, sino que para todos los objetos (tengamdos 2 o 200 objetos) el método 2 es el mismo porque pertenece a la clase, no a los objetos. Antes podía pertenecer a cada uno de los objetos pero ahora pertenece a la clase. 

	Tip:
	Variables de clase, cuando usamos para regresar un valor o interactuar con variables recordar los simbolos: $variable = $this->$variable/función





-->

<?php

	include("Concesionario.php");
	
	//Si quisiéramos editar la ayuda lo podríamos hacer de la siguiente forma. Pero esto por qué sucede? Porque a pesar de que la variable ayuda es estática y no pertenece a ninguno de los objetos/instancias aquí creados. (No podemos utilizar $compra_Antonio para hacer referencia a la variable $ayuda porque no aparecerá, ya que es static y sólo pertenece a la clase. Tampoco se pueden usar los :: porque es un campo qeu no pertenece a $compra_antonio si no que pertenece a la propia clase) Entonces la forma de hacer referencia a una variable estática desde fuera de la propia clase es: Utilizamos el nombre de la propia clase :: y la variable estática.

	//Lo que sucede aquí es que manipulamos este valor de la variable estática $ayuda y como es compartido por todos los objetos que pertenezcan a la clase Compra_Vehiculo entonces se restarán 10000 al monto total de loq ue compró Antonio y lo que compró Ana. Si tuviéramos 20 compradores mas, se hubiese aplicado para todos. Los compradores (objetos) no tienen su propia copia.
	//Compra_vehiculo::$ayuda=10000; Línea comentada por el video 29 del curso de PHP donde comentamos esta línea ya que la variable ayuda se declaró private static y ya no puede ser accedida fuera de la clase. Se evita el que manipulemos la ayuda manualmente.

	//En el video 29 se ocurre la idea de que la ayuda no la dan siempre si no por períodos, entonces utilizaremos un método estático para resolver esto.

	//según hacer esto: $compra_Ana->descuento_gobierno(); no se puede hacer porque no es un método que pertenezca a $compra_Ana. Como se trata de un método de clase lo que tenemos que utilizar es el nombre de la clase::descuento_gobierno();

	Compra_Vehiculo::descuento_gobierno();
	
	$compra_Antonio=new Compra_vehiculo("compacto"); //Tiene copia del método climatizador y tapiceria
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco"); //Pueden tener comportamientos diferentes por ser no estáticos
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto"); //Este también tiene copia del método climatizador y tapiceria
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo"); //Pueden tener comportamientos diferentes por ser no estáticos
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>