<!DOCTYPE html>
<html>
<head>
  <title>Resultado - Operaciones Lógicas de Bit</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valor_1 = $_POST["valor1"];
  $valor_2 = $_POST["valor2"];

  $resultadoAnd = $valor_1 & $valor_2;
  $resultadoOr = $valor_1 | $valor_2;
  $resultadoXor = $valor_1 ^ $valor_2;

  echo "El valor 1 es: " . $valor_1 . "<br/>";
  echo "El valor 2 es: " . $valor_2 . "<br/>";
  echo "El resultado del valor 1 & el valor 2 es: " . $resultadoAnd . "<br/>";
  echo "El resultado de valor 1 | el valor 2 es: " . $resultadoOr . "<br/>";
  echo "El resultado de valor 1 ^ el valor 2 es: " . $resultadoXor . "<br/>";
}
?>
</body>
</html>
