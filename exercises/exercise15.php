<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 14</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 15</h3>
		<p>15. Un obrero necesita calcular su salario semanal, el cual se obtiene de la sig.     manera:
		<ul>
			<li>Si trabaja 40 horas o menos se le paga $16 por hora.</li>
			<li>Si trabaja más de 40 horas se le paga $16 por cada una de las primeras 40 horas y $20 por cada hora extra.</li>
		</ul>
    Validar los datos de entrada.
</p>
		<form name="exer14" action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Hours: &nbsp &nbsp &nbsp &nbsp</label>
				<input type="text" name="hours" placeholder="Enter hours from 0 to 40" >
			</div><br>
			<div>
				<label for="text">Extra hours: </label>
				<input type="text" name="extra" placeholder="Enter hours from 0 to 40" >
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>

		<?php
			if (isset($_POST['button'])) {
				$hours = $_POST['hours'];
				$extra = $_POST['extra'];
				$salary;
				$errors = array();

				if (empty($_POST['hours'])) {
					echo "No se aceptan campos vacíos, por favor completar todos los campos.";
				}elseif (is_numeric($hours)==FALSE || is_numeric($extra)==FALSE) {
					if (is_numeric($hours)==FALSE) {
						echo "Error! El campo de horas no puede tener letras." . "<br>";
					}
					if (is_numeric($extra)==TRUE) {
						echo "Error! El campo de horas extra no puede tener letras." . "<br>";
					}
					//var_dump($hours);
				}elseif ($hours<0 || $hours>40 || $extra<0 || $extra>25) {
					if ($hours<0 || $hours>40) {
						echo "Ingrese un número entre 0-40 para representar las horas trabajadas por el obrero." . "<br>";
					}
					if ($extra<0 || $extra>25) {
						echo "Ingrese un número entre 0-25 para representar las horas extras trabajadas por el obrero." . "<br>";
					}
				}else{
					if ($hours<=40) {
						$salary = $hours*16;
						echo "El salario semanal del obrero es de " . "$" . $salary . "<br>";
					} //var_dump($extra);
					if ($hours==40 && $extra>0) {
						$salary = ($hours*16)+($extra*20);
						echo "El salario semanal del obrero con $extra horas extra es de " . "$" . $salary . "<br>";
					}
				}




			}



		?>



	</body>
</html>