<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="#"> <!-- action tenía calculadora.php -->
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1" placeholder="Ingresa el primer valor">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2" placeholder="Ingresa el segundo valor">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

<?php
  
  if(isset($_POST["button"])){

    $numero1 = $_POST["num1"]; //En $numero1 guardo lo que el usuario introduzca en el input que tenga el id="num1"
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    if (!strcmp("Suma", $operacion)) {
      echo "La suma es: " . ($numero1+$numero2);
    }

   /* if ($operacion=="Resta"){
      echo "La resta es: " . ($numero1-$numero2);
    } */ //Esta es una forma de hacerlo que me parece la común, la comento para seguir tal cual el video y hacerlo cin la función strcmp
    if (!strcmp("Resta", $operacion)) {
      echo "La resta es: " . ($numero1-$numero2);
    }

    if (!strcmp("Multiplicación", $operacion)) {
      echo "La Multiplicación es: " . ($numero1*$numero2);
    }

    if (!strcmp("División", $operacion)) {
      echo "La División es: " . ($numero1/$numero2);
    }

    if (!strcmp("Módulo", $operacion)) {
      echo "El Módulo es: " . ($numero1%$numero2);
    }


  }
  


?>



</body>
</html>