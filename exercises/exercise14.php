<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 14</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 14</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Grade 1: </label>
				<input type="text" name="grade1" placeholder="Type grade 1">
			</div>
			<div>
				<label for="text">Grade 2: </label>
				<input type="text" name="grade2" placeholder="Type grade 2">
			</div>
			<div>
				<label for="text">Grade 3: </label>
				<input type="text" name="grade3" placeholder="Type grade 3">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST['button'])){
				$grade1 = $_POST['grade1'];
				$grade2 = $_POST['grade2'];
				$grade3 = $_POST['grade3'];

				while($grade1<0){
					
						echo "Error! Nota 1 inválida. Ingrese una nota válida!";
					

				}

				do{
					if ($grade2<0 | $grade2>20) {
						echo "Error! Nota 1 inválida. Ingrese una nota válida!";
					}

				}while($grade2>=0 && $grade2<=20);

				do{
					if ($grade3<0 | $grade3>20) {
						echo "Error! Nota 1 inválida. Ingrese una nota válida!";
					}

				}while($grade3>=0 && $grade3<=20);

				$prom = ($grade1+$grade2+$grade3/3);

				if ($prom>=15) {
					echo "El promedio del alumno es " . $prom;
					echo "El alumno ha aprobado!";
				}else{
					echo "El promedio del alumno es " . $prom;
					echo "El alumno ha reprobado.";
				}
			}

		?>
	</body>
</html>