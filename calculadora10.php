<style type="text/css">
  
  .estilo{
    color: #F00;
    font-weight: bold;
    font-size: 32px;
  }

</style>

<?php


  function calculator($calculate, $num1, $num2){ //Aquí recibo los 3 parámetros, se definen 3 porque yo mismo sé que le voy a pasar 3 valores al momento de llamarla y necesito 3 variables donde puedo guardar esos 3 valores que le envío.
    
    if (!strcmp("Suma", $calculate)) {
      $resultado = $num1+$num2;
      echo "<p class='estilo'>La suma es: " . $resultado;
    }

   /* if ($operacion=="Resta"){
      echo "La resta es: " . ($numero1-$numero2);
    } */ //Esta es una forma de hacerlo que me parece la común, la comento para seguir tal cual el video y hacerlo cin la función strcmp
    if (!strcmp("Resta", $calculate)) {
      $resultado = $num1*$num2;
      echo "<p class='estilo'> La resta es: " . ($num1-$num2);
    }

    if (!strcmp("Multiplicación", $calculate)) {
      $resultado = $num1*$num2;
      echo "La Multiplicación es: " . $resultado;
    }

    if (!strcmp("División", $calculate)) {
      $resultado = $num1/$num2;
      echo "La División es: " . $resultado;
    }

    if (!strcmp("Módulo", $calculate)) {
      $resultado = $num1%$num2;
      echo "El Módulo es: " . $resultado;
    }


  }
  
  if(isset($_POST["button"])){

    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    calculator($operacion, $numero1, $numero2); //Llamo a la función calculator y le paso 3 parámetros, que son las variables donde se guarda lo que el usuario introduce.
  }


?>