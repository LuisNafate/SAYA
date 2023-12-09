<!DOCTYPE html>
<html>
<head>
  <title>Resultado - Matriz con Bucle For</title>
</head>
<body>
<?php
$nombres = array("Pedro", "Ismael", "Sonia", "Clara", "Susana", "Alfonso", "Teresa");
$elementos = count($nombres);

echo "<h1>Nombres en la Matriz:</h1>";

for ($varCon = 0; $varCon < $elementos; $varCon++) {
  echo $nombres[$varCon] . "<br />";
}
?>
</body>
</html>
