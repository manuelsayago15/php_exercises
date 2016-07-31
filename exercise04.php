<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 4</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 4</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="number" placeholder="Type the first number">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="number2" placeholder="Type the second number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST["button"])){
				$num1 = $_POST["number"];
				$num2 = $_POST["number2"];
				$result = $num1*$num2;
				echo "Your first number is: " . $num1 . "<br>";
				echo "Your second number is: " . $num2 . "<br>";
				echo "The multiplicaction of both is: " . $result;
			}


		?>
	</body>