<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 2 PHP</title>
		<meta charset="utf-8">
		<style type="text/css">
			.style{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h1 class="style">PHP Exercises</h1>
		<h2 class="style">Exercise 2</h2>
		<form action="#" method="post" name="userdata" id="userdata">
			<div>
				<label for="text">Name:</label>
				<input type="text" name="name" id="nme" placeholder="Type your name" required>
			</div>
			<div>
				<label for="text">ID Card:</label>
				<input type="text" name="idcard" id="card" placeholder="Type your ID Card" required>
			</div>
				<input name="button" type="submit" id="sending" value="Send">
		</form>
		<?php
		if(isset($_POST["button"])){

			$name = $_POST["name"];
			$id = $_POST["idcard"];

			echo "Your name is: " .  $name . "<br>";
			echo "Your ID Card is: " . $id;
		}

		?>
	</body>