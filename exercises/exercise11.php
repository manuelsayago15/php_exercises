<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Exercise 11</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>PHP Exercises</h2>
		<h3>Exercise 11</h3>
		<form action="#" method="post" id="constant" name="constant">
			<div>
				<label for="text">Price: </label>
				<input type="text" name="price" placeholder="Type a price">
			</div>
			<div>
				<input type="submit" name="button" id="sending" value="Send">
			</div>
		</form>
		<?php
			if(isset($_POST['button'])){
				$price = $_POST['price'];
				if ($price>0) {
					$iva = $price*0.12;
					echo "El IVA de este monto es: " . $iva;
				}else{
					echo "Error, ingrese un precio válido.";
				}

			}
		?>
	</body>
</html>