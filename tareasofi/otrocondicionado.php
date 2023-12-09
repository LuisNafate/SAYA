<?php
$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ciudad"])) {
  $inputCiudad = $_POST["ciudad"];
  $encontrada = false;

  foreach ($ciudades as $ciudad) {
    echo ($ciudad . "<br />");

    if ($ciudad == $inputCiudad) {
      $encontrada = true;
      break;
    }
  }

  if ($encontrada) {
    echo ("La ciudad $inputCiudad ha sido encontrada.");
  } else {
    echo ("La ciudad $inputCiudad no está en la lista.");
  }
} else {
  echo ("No se ha proporcionado ninguna ciudad.");
}
?>
