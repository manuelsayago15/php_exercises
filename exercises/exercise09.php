<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 9</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="number" placeholder="Type a number between 1-10">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){

			$num1 = $_POST["number"];
			
			if ($num1>=1 && $num1<=10) {
				echo "The value is in the range!";
			}else{
				echo "The value is out of the range";
			}
		}

		


	?>

	</body>
</html>