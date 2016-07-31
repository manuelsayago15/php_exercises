<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="#" method="post" name="datos_usuario" id="datos_usuario"> <!-- action tenía validacion.php pero prefiero tener el código php en este mismo archivo para que se mantenga el formulario, ya que al usar el validacion.php me muestra los mensajes segun la condicion pero el form no aparece porque obvio, no está en ese archivo -->
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<?php
//Comienzo a crear el código de lo que hará el formulario

//La siguiente función (isset) es para comprobar si se ha pulsado el botón de "Enviar"

//$_POST es una variable Súper Global que es pocas palabras es un array

if(isset($_POST["enviando"])){

	$usuario = $_POST["nombre_usuario"]; //En la variable usuario guardo lo que se introdujo en el form
	$edad = $_POST["edad_usuario"]; //En la variable edad guardo lo que se introdujo en el form

	if ($usuario=="Manuel" && $edad>=18) {
		# code...
		echo "<p class='validado'>Puedes ingresar!</p>";
	}else{
		echo "<p class=\"no_validado\">" . "No puedes ingresar!" . "</p>"; //Es lo mismo que el anterior <p> pero es otra forma, asi se ve el escape de las comillas y concatenación.
	}
}



?>

</body>
</html>