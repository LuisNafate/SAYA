<!DOCTYPE html>
<html>
<head>
  <title>Resultado de Función con Variables Globales</title>
</head>
<body>
<?php
function cuadrado($valor){
  $cuadrado = $valor * $valor;
  echo "El cuadrado de $valor es $cuadrado.<br/>";
  echo "La variable global numero dentro de la función vale " . $GLOBALS["numero"] . " y es de tipo " .
  gettype($GLOBALS["numero"]) . "<br/>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero = $_POST["numero"];
  $cuadrado = cuadrado($numero);
  echo "La variable \$numero fuera de la función vale $numero y es de tipo " . gettype($numero) . "<br/>";
  echo "La variable \$cuadrado fuera de la función vale $cuadrado y es de tipo " . gettype($cuadrado) . "<br/>";
}
?>
</body>
</html>
