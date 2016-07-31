<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 13</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Name:</label>
				<input type="text" name="name" placeholder="Type your name">
			</div>
			<div>
				<label for="text">Age:</label>
				<input type="text" name="age" placeholder="Type your age">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Register">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){

			$name = $_POST["name"];
			$age = $_POST["age"];
			
			if ($age>0 && $age<100) {
				echo "User registered!" . "<br>";
				echo "Your name is " . $name . " and your age is " . $age;
			}else{
				echo "Error! User couldn't be registered" . "<br>"	;
				echo "Type an age between 0-100 range";
			}
		}

		


	?>

	</body>
</html>