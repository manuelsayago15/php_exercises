<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 8</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 8</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text"></label>
				<input type="text" name="price1" placeholder="Type the first price">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="price2" placeholder="Type the second price">
			</div>
			<div>
				<label for="text"></label>
				<input type="text" name="price3" placeholder="Type the third price">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST["button"])){
				$price1 = $_POST["price1"];
				$price2 = $_POST["price2"];
				$price3 = $_POST["price3"];

				$sum = $price1+$price2+$price3;
				echo "Total amount without taxes: " . $sum . "<br>";

				$total_taxes = ($price1*0.12)+($price2*0.12)+($price3*0.12);

				$total_amount = $sum + $total_taxes;
				echo "The sum of taxes is: " . $total_taxes . "<br>";
				echo "The total amount with taxes is: " . $total_amount;
			}



		?>

	</body>
</html>