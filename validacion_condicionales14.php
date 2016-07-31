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

<?php

	if(isset($_POST["enviando"])){
		$passwd = $_POST["password"];
		$nombre = $_POST["nombre_usuario"];
		/*if ($edad<18) {
			echo "Eres menor de edad.";
		}else if ($edad<=40) {
			echo "Eres j&oacute;ven!";
		}else if ($edad<=65) {
			echo "Eres maduro!";
		}else {
			echo "Eres anciano, debes cuidarte.";
		}*/

		//Operador ternario, una condición "más sencilla": condición ? valor si verdadero : valor si falso

		/*$resultado = $edad<18 ? "Eres menor de edad, no puedes acceder al sitio." : "Puedes acceder al sitio tranquilamente.";
		echo $resultado;*/

		$resultado = $nombre=="Manuel" && $passwd=="Buise" ? "Puedes acceder" : "No puedes acceder";
		echo $resultado;
	}

?>