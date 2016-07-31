<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 7</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 7</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="name" placeholder="Type your name">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="dob" placeholder="Type the year you were born">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php

			if(isset($_POST["button"])){
				$name = $_POST["name"];
				$dob = $_POST["dob"];
				$age = 2016-$dob;
				echo "Your name is: " . $name . "<br>";
				echo "You are " . $age . " years old!";
			}


		?>


	</body>
</html>