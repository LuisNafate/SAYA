<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   function estaticas($numero){
     static $variableNormal;
     $variableNormal = $numero;
     $variableNormal += 5;
     echo "El valor de \$variableNormal al comienzo de la funcion es $variableNormal.<br/>";
     $variableNormal *= 2;
     echo "Al duplicar \$variableNormal su valor es $variableNormal.<br/>";
   }

   $numero = $_POST["numero"];

   echo "<u>Primera ejecucion de la funcion.</u><br/>";
   estaticas($numero);
   echo "<u>Segunda ejecucion de la funcion.</u><br/>";
   estaticas($numero);
 }
 ?>
