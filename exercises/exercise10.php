<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 10</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="positive" placeholder="Type a positive number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){

			$num1 = $_POST["positive"];
			
			if ($num1>0) {
				echo "The number is positive!" . "<br>";
				echo "Your number was: " . $num1;
			}else{
				echo "Error! Type a positive number!" . "<br>"	;
				echo "Your number was: " . $num1;
			}
		}

		


	?>

	</body>
</html>