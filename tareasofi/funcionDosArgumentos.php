<?php

  function producto($valor1, $valor2) {
    $resultado=$valor1*$valor2;
    echo ("Resultado: $resultado");
  }

  $numero1=3;
  $numero2=$_POST["numero"];
  producto($numero1, $numero2);

 ?>
