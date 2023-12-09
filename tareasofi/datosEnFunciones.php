<!DOCTYPE html>
<html>
<head>
  <title>Resultado Cuadrado</title>
</head>
<body>
<?php
function cuadrado($numero) {
  $cuadrado = $numero * $numero;
  echo ("El cuadrado de $numero es $cuadrado.<br/>");
  return $cuadrado;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero = $_POST["numero"];
  $cuadrado = cuadrado($numero);
  echo "La variable \$numero vale $numero y es de tipo " . gettype($numero) . "<br/>";
  echo "La variable \$cuadrado vale $cuadrado y es de tipo " . gettype($cuadrado) . "<br/>";
}
?>
</body>
</html>
