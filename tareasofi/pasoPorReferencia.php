<?php
 session_start();

 function cuadrado(&$numero){
   $numero *= $numero;
   echo ("En la función el número se eleva al cuadrado, obteniendo el resultado: $numero<br />");
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
   $numero = $_POST["numero"];
   $_SESSION["numero"] = $numero;

   echo ("El número, antes de invocar la función, vale: {$_SESSION['numero']}<br />");
   cuadrado($_SESSION["numero"]);
   echo ("El número, después de invocar la función, vale: {$_SESSION['numero']}");
 } else {
   echo ("No se ha proporcionado ningún número.");
 }
 ?>
