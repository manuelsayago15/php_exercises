<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Conexión a Base de Datos</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			//Para este ejercicio se creó una base de datos llamada "prueba" y a su vez tiene los campos, ci, nombre, apellido, edad
			//4 datos importantes y necesarios para crear la conexión a la BBDD
			//Se puede conectar con la BBDD de 2 formas, ya sea con POO o procedimientos
			//Procedimiento
			//Creo la variable para el host (La dirección de la BBDD)
			$db_host = "localhost";
			//Creo la variable para El nombre de la BBDD
			$db_name = "prueba";
			//Creo la variable para el usuario de la BBDD
			$db_usuario = "root";
			//Creo la variable para la contraseña de la BBDD
			$db_contra = "";

			//La variable para la conexión a la BBDD. La función mysqli_connect pide una serie de parámetros y el primero es la dirección de la BBDD ($db_host), el usuario de la BBDD ($db_usuario), luego pide la contraseña ($db_contra) y por último pide el nombre de la BBDD ($db_name). Con esto ya hacemos conexión con la BBDD. ("La función te abre la conexión a la BBDD y la variable guarda la información necesaria de la conexión, con esa info en la variable podes continuar con tu consulta")
			$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_name);

			if (mysqli_connect_errno()) {
				echo "Error al conectar con la Base de Datos";
			}


			//Aquí hacemos una consulta	para comprobar que sí hemos conectado con la BBDD. Creamos una variable con cualquier nombre que por lo general se le llama "query" por consulta en inglés. Aplicamos la instrucción del lenguaje SQL y la guardamos en una variable ($query).		
			$query = "SELECT * FROM datos_personales";
			
			//Ahora hay que ejecutar la consulta, ¿cómo se hace? Pues utilizamos la función llamada mysqli_query que pide algunos parámetros. Primero nos pide la conexión que vamos a utilizar ($conexion) y después nos pide la instrucción SQL que la tenemos almacenada en $query. Esta forma de crear variables y guardar sentencias SQL en ellas es mucho más cómodo y se ve el código más limpio. De igual manera se podría hacer sin las variables, sólo usando los strings y las sentencias SQL.
			$result = mysqli_query($conexion, $query);

			//Cuando ejecutamos la consulta (llamar a la función), por debajo se crea una especie de tabla virtual en memoria que tiene cada uno de los registros en la consulta que estamos haciendo. La sentencia SQL lo que nos devuelve es la información de esa tabla virtual, en este caso devuelve los 4 campos de la tabla y sus registros. Con la función mysqli_fetch_row lo que hace es traer cada fila de esa tabla virtual que tenemos en memoria, por eso las palabras fetch de traer/buscar y row de fila. 

			//Cuando se escribe dicha función, ella te pide el parámetro "resource" que viene siendo la $variable resultado porque allí es dónde ejecutamos la consulta y si nos fijamos, sus parámetros son el de la conexión de la BBDD y la sentencia de la consulta. Esta función lo que hace es ir viendo fila a fila lo que hay almacenado en la tabla virtual y lo guarda en un array, es decir, fila viene siendo un array que guarda la función fetch y lo que hay almacenado en el resource ($result)
			$fila = mysqli_fetch_row($result);
			$fila2 = mysqli_fetch_row($result);
			//Aquí lo que hacemos es preguntarle al array qué es lo que tiene almacenado según la posición
			echo $fila[0] . "<br>";
			echo $fila[1] . "<br>";
			echo $fila[2] . "<br>";
			echo $fila[3] . "<br>";
			echo $fila2[0] . "<br>";
			echo $fila2[1] . "<br>";
			echo $fila2[2] . "<br>";
			echo $fila2[3] . "<br>";



		?>
	</body>
</html>