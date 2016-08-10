<?php

	if( ! empty($_POST) )
	{

		if( isset($_POST['txtNombre']) && isset($_POST['txtApellidos']) )
		{
			echo "Nombre: [".$_POST['txtNombre']."]<br/>";
			echo "Apellidos: [".$_POST['txtApellidos']."]<br/>";
			echo "Edad: [".$_POST['txtEdad']."]<br/>";
	
			if( isset($_POST['chkActivo']) == true )
				echo "Activo: [".$_POST['chkActivo']."]<br/>";
		}
		else
		{
			echo "Introduzca todos los datos requeridos";
		}

		echo "<hr/>";

	}

?>


<html>

    <head>
		<title>Curso de PHP - ejemplo de formulario | www.aprender-informatica.com</title>
    </head>

	<body>

		<form name="frmPrueba" method="post" action="02_form2.php" >	

			Nombre(*):    <input type="text" name="txtNombre"	 id="txt1" />
			Apellidos(*): <input type="text" name="txtApellidos" id="txt2" value="Mena Perdomo" />
			Edad:		  <input type="text" name="txtEdad"		 id="txt3" size="3" maxlength="2" /><p/>

			<input type="checkbox" name="chkActivo" value="1" />Activo<p/>
			
			<input type="submit" name="btnEnviar" value="Enviar Formulario" />
			
		</form>

	</body>

</html>