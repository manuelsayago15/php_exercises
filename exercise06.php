<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 6</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 6</h3>
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
				<label for="text"></label>
				<input type="text" name="number3" placeholder="Type the third number">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="number4" placeholder="Type the fourth number">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="number5" placeholder="Type the fifth number">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST["button"])){
				$grade1 = $_POST["number"];
				$grade2 = $_POST["number2"];
				$grade3 = $_POST["number3"];
				$grade4 = $_POST["number4"];
				$grade5 = $_POST["number5"];
				$average = ($grade1+$grade2+$grade3+$grade4+$grade5)/5;
				echo "Your grades 1 to 5 are: " . $grade1 . ", " . $grade2 . ", " . $grade3 . ", " . $grade4 . ", " . $grade5 . "<br>";
				echo "Your average is: " . $average;
			}
		?>
	</body>
</html>