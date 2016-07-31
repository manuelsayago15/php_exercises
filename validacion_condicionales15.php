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
		//$edad = $_POST["edad_usuario"];
		//$nombre = $_POST["nombre_usuario"];
		/*if ($edad<18) {
			echo "Eres menor de edad.";
		}else if ($edad<=40) {
			echo "Eres j&oacute;ven!";
		}else if ($edad<=65) {
			echo "Eres maduro!";
		}else {
			echo "Eres anciano, debes cuidarte.";
		}*/
		$password = $_POST["passwd"];
		$name = $_POST["nombre_usuario"];
		//Aplicando switch para validar solamente los nombres. Ejemplo para ver solamente cómo funciona el switch.
		/*switch ($name) {
			case "Manuel":
				echo "Hello, Engineer Manuel! Welcome!";
				break;
			case "Luisana":
				echo "Lu, our favorite Designer, welcome back! How are you today?";
				break;
			case 'Graciela':
				echo "Hello Grace, how have you been?";
				break;
			default:
				echo "You can't access, you are not allow to it.";
				break;
		}*/

		switch (true) {
			case $name=="Manuel" && $password=="Buise":
				echo "Hello, Engineer Manuel! Welcome!";
				break;
			case $name=="Luisana" && $password=="MLS":
				echo "Lu, our favorite Designer, welcome back! How are you today?";
				break;
			case $name=="Graciela" && $password=="Java":
				echo "Hello Grace, how have you been?";
				break;
			default:
				echo "You can't access, you are not allow to it.";
				break;
		}

	}

?>