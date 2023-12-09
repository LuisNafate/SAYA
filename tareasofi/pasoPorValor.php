<?php
function cuadrado($numero){
  $numero *= $numero;
  echo ("En la función, el numero se eleva al cuadrado, obteniendo el resultado: $numero<br />");
  return $numero;
}

if (isset($_GET["numero"])) {
  $numero = $_GET["numero"];
  echo ("El número, antes de invocar la funcion, vale: $numero<br />");
  $numero = cuadrado($numero);
  echo ("El número, después de invocar la funcion, vale: $numero");
} else {
  echo ("No se ha proporcionado ningún número.");
}
?>
