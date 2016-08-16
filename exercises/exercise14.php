<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 14</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 14</h3>
		<form name="exer14" action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Grade 1: </label>
				<input type="number" name="grade1" placeholder="Type grade 1" >
			</div>
			<div>
				<label for="text">Grade 2: </label>
				<input type="number" name="grade2" placeholder="Type grade 2" >
			</div>
			<div>
				<label for="text">Grade 3: </label>
				<input type="number" name="grade3" placeholder="Type grade 3" >
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			/*
			<?php
			    // Comprobar si el formulario fue enviado (si el array asociativo '$_POST' no está vacío)
			    if( empty($_POST ) == true )
			    {
			        // El formulario no ha sido enviado
			    }
			    else
			    {
			        echo "<p>Contenido del array asociativo con la información del formulario:</p>";
			        print_r( $_POST );

			        echo "<p/>";

			        echo "Fecha: [".$_POST['txtFecha']."]<br/>";
			        echo "Numero: [".$_POST['txtNumero']."]<br/>";

			        echo "<hr/>";
			    }
			?>
			*/
			
		if(isset($_POST['button'])){
			$grade1 = $_POST['grade1'];
			$grade2 = $_POST['grade2'];
			$grade3 = $_POST['grade3'];
			$count = 0;
			$errors = array("Error1" => "Error! la nota $grade1 es incorrecta. Ingrese una nota 			válida entre 0-20.",
							"Error2" => "Error! la nota $grade2 es incorrecta. Ingrese una nota válida entre 0-20.",
							"Error3" => "Error! la nota $grade3 es incorrecta. Ingrese una nota válida entre 0-20.");
			
			if (empty($_POST['grade1']) || empty($_POST['grade2']) || empty($_POST['grade3'])) {
				echo "Ningún campo puede estar vacío. Complete todos los campos.";
			}elseif ($grade1<0 || $grade1>20 || $grade2<0 || $grade2>20 || $grade3<0 || $grade3>20) {

				if ($grade1<0 || $grade1>20){
					echo $errors["Error1"] . "<br>";
				}
				if ($grade2<0 || $grade2>20){
					echo $errors["Error2"] . "<br>";
				}
				if ($grade3<0 || $grade3>20){
					echo $errors["Error3"] . "<br>";
				}
					//print_r($errors);
			}elseif (($grade1>=0 || $grade1<=20) && ($grade2>=0 || $grade2<=20) && ($grade3>=0 || $grade3<=20)) {

				$prom = ($grade1+$grade2+$grade3)/3;

				if ($prom>=15) {
					echo "El promedio del alumno es " . $prom . "<br>";
					echo "El alumno ha aprobado!";
				}else{
					echo "El promedio del alumno es " . $prom . "<br>";
					echo "El alumno ha reprobado.";
				}
			}else{
				echo "Ingrese las notas correctamente";
			}
				
			
		}
		?>
	</body>
</html>