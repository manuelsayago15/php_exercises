<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 14</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 14</h3>
		<form name="exer14" action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Grade 1: </label>
				<input type="number" name="grade1" placeholder="Type grade 1" >
			</div>
			<div>
				<label for="text">Grade 2: </label>
				<input type="number" name="grade2" placeholder="Type grade 2" >
			</div>
			<div>
				<label for="text">Grade 3: </label>
				<input type="number" name="grade3" placeholder="Type grade 3" >
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>

		<?php
			if (isset($_POST['button'])) {
				# code...
			}



		?>



	</body>
</html>