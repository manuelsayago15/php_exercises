<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 5</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="number" placeholder="Type the first number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){
			$num1 = $_POST["number"];
			$value = $num1*3;
			echo "Your number is: " . $num1 . "<br>";
			echo "Your number three times is: " . $value;
		}




	?>

	</body>
</html>