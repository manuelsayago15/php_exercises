<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 8</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="name" placeholder="Type your name">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="number" placeholder="Type the year you were born">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){
			$name = $_POST["name"];
			$num1 = $_POST["number"];
			$value = 2016-$num1;
			echo "Your name is : " . $name . "<br>";
			echo "The year is: " . $num1 . "<br>";
			echo "You are " .$value . " years old!";
		}

		


	?>

	</body>
</html>