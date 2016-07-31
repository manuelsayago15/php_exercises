<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="#">
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
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

<?php
  
  include("calculadora11.php");

  if(isset($_POST["button"])){

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calculator($operacion, $numero1, $numero2); //Llamo a la función calculator y le paso 3 parámetros, que son las variables donde se guarda lo que el usuario introduce.
  }
  

?>



</body>
</html>