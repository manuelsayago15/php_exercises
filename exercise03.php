<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 3 PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 3</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="number" placeholder="Type a number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php

			define("MANUEL", "10");
			$var1 = MANUEL;
			
			if(isset($_POST["button"])){
				$var2 = $_POST["number"];
				$result = $var1+$var2;
				echo "The constant values: " . $var1 . "<br>";
				echo "Your number is: " . $var2 . "<br>";
				echo "Constant + your number is: " . $result;
			}

		?>
	</body>
</html>