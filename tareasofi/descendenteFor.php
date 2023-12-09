<?php
if (isset($_GET["inicio"])) {
  $inicio = $_GET["inicio"];

  for ($varCon = $inicio; $varCon >= 1; $varCon--) {
    echo ($varCon . "<br />");
  }
} else {
  echo "No se ha especificado ningún número inicial.";
}
