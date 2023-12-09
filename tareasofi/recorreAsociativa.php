
 <?php
 $ciudades = array(
   "md" => "Madrid",
   "ba" => "Barcelona",
   "lo" => "Londres",
   "ny" => "Nueva York",
   "la" => "Los Ángeles",
   "ch" => "Chicago"
 );

 if (isset($_GET["ciudad"])) {
   $ciudadSeleccionada = $_GET["ciudad"];

   if (array_key_exists($ciudadSeleccionada, $ciudades)) {
     $nombreCiudad = $ciudades[$ciudadSeleccionada];
     echo ("La ciudad con el índice $ciudadSeleccionada tiene el nombre $nombreCiudad. <br />");
   } else {
     echo ("La ciudad seleccionada no existe en la lista. <br />");
   }

   echo ("Final de la ejecución.");
 } else {
   echo ("No se ha seleccionado ninguna ciudad.");
 }
 ?>
