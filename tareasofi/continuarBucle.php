<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ciudades = array("md" => "Madrid", "ba" => "Barcelona", "lo" => "Londres", "ny" => "Neyw York", "la" => "Los Angeles");

  $ciudadSeleccionada = $_POST["ciudad"];

  foreach ($ciudades as $clave => $valor) {
    if ($valor == $ciudades[$ciudadSeleccionada]) {
      continue;
    }
    echo ("La con el índice $clave tiene el nombre $valor. <br />");
  }

  echo ("Final de la ejecución");
} else {
  echo "Acceso no permitido";
}
?>
