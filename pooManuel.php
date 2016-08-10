<!DOCTYPE html>
<html lang="en">
	<head>
		<title>POO</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			class Smartphone(){
				var $screen;
				var $camera;
				var $ram;
				var $so;


				function Smartphone(){
					$this->camera = 8;
					$this->ram = 2;
					$this->so = "Lollipop";
				}


				function takepictures(){

				}

				function recordvideos(){

				}

				function call(){

				}

				function sendmessage(){

				}
			}

			$blu = new Smartphone();
			$huawei = new Smartphone();
			$samsung = new Smartphone();
			$zte = new Smartphone();


		?>

	</body>
</html>