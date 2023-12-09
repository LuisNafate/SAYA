<!DOCTYPE html>
<html>
<head>
  <title>Resultado Verificación de Edad con Operador Ternario</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $edad = $_POST["edad"];
  $usuario = ($edad >= 18) ? "El usuario es mayor de edad" : "El usuario NO es mayor de edad";
  echo "$usuario";
}
?>
</body>
</html>
