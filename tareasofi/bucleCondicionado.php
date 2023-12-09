<?php
$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $ciudad = $_POST["ciudad"];
  $indice = array_search($ciudad, $ciudades);

  if ($indice !== false) {
    while ($indice < count($ciudades)) {
      $ciudad = $ciudades[$indice];
      echo ($ciudad . "<br>");
      $indice++;
    }
    echo "Final de la ejecución.";
  } else {
    echo "La ciudad seleccionada no está en la lista.";
  }
}
?>
