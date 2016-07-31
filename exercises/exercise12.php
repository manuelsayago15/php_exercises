<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 12</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="value" placeholder="Type a positive number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
	<?php
		if(isset($_POST["button"])){

			$num1 = $_POST["value"];
			
			if ($num1>100) {
				echo "The number is greater than 100!" . "<br>";
				echo "The number is: " . $num1;
			}else if ($num1<100){
				echo "The number is less than 100!" . "<br>";
				echo "The number is: " . $num1;
			}else{
				echo "The number is equal to 100!" . "<br>";
			}
		}

		


	?>

	</body>
</html>