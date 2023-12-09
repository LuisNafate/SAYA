<?php
 $amigos = array(
   "Madrid" => array("nombre" => "pedro", "edad" => 32, "telefono" => "91-999.99.99"),
   "Barcelona" => array("nombre" => "Susana", "edad" => 34, "telefono" => "93-000.00.00"),
   "Toledo" => array("nombre" => "Sonia", "edad" => 42, "telefono" => "925-09.09.09")
 );

 if (isset($_GET["ciudad"])) {
   $ciudadSeleccionada = $_GET["ciudad"];

   if (array_key_exists($ciudadSeleccionada, $amigos)) {
     echo ("En $ciudadSeleccionada tiene el amigo:<br />");
     foreach ($amigos[$ciudadSeleccionada] as $clave => $valor) {
       echo ($clave . ": " . $valor . "<br />");
     }
   } else {
     echo ("La ciudad seleccionada no tiene amigos registrados.<br />");
   }

   echo ("Final de la ejecución.");
 } else {
   echo ("No se ha seleccionado ninguna ciudad.");
 }
 ?>
