<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 1</h3>
		<p>1. Realizar un algoritmo que muestre los números de uno en uno hasta el diez usando cualquier estructura cíclica. .</p>
		<h3>While</h3>
		<?php
			$num = 1;

			while ($num<=10) {
				echo $num . "<br>";
				$num++;
			}

		?>
		<hr>
		<h3>Do-While</h3>
		<?php
			$num1 = 1;
			do{
				echo $num1 . "<br>";
				$num1++;
			}while($num1<=10);

		?>
		<hr>
		<h3>For</h3>
		<?php
			for($i=1;$i<=10;$i++){
				echo $i . "<br>";
			}
		?>
		<hr>
		<h3>For con array indexado</h3>
		<?php
			$array = array("Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho","Nueve","Diez");
			
			for ($i=0; $i<count($array); $i++) { 
				echo $array[$i] . "<br>";
			}
		?>
		<hr>
		<h3>Foreach para array asociativo</h3>
		<?php
			$array2 = array('Uno' => 1, "Dos" => 2, "Tres" => 3, "Cuatro" => 4, "Cinco" => 5, "Seis" =>6, "Siete" => 7, "Ocho" => 8, "Nueve" => 9, "Diez" => 10);
			foreach ($array2 as $key => $value) {
				echo $key . " = " . $value . "<br>";
			}
		?>
	</body>
</html>