<?php
   $ciudades=array("md"=>"Madrid", "ba"=>"Barcelona","lo"=>"Londres",
    "ny"=>"New York", "la"=>"Los Angeles");
   foreach ($ciudades as $clave => $valor) {
     if ($valor =="Londres") break;
     echo ("La ciudad con el índice $clave tiene el nombre $valor.<br />");
   }
   echo ("Final de ejecución.");
   ?>
