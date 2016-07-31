<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 7</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="grade1" placeholder="Type the first grade">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="grade2" placeholder="Type the second grade">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="grade3" placeholder="Type the third grade">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST["button"])){
				$grade1 = $_POST["grade1"];
				$grade2 = $_POST["grade2"];
				$grade3 = $_POST["grade3"];
				$value = ($grade1+$grade2+$grade3)/3;
				echo "Your grades are: " . $grade1 . ", " . $grade2 . ", " . $grade3 . "<br>";
				echo "Your average is: " . $value;
			}




		?>

	</body>
</html>