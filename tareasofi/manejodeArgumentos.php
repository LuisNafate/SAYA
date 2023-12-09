 <?php

 function comprobarArgumentos(){
   $numeroDeArgumentos = func_num_args();
   echo ("<u>Uso de func_num_args().</u><br />");
   echo ("El número de argumentos es $numeroDeArgumentos<br />");
   echo ("<br />");

   echo ("<u>Uso de func_get_arg().</u><br />");
   for ($contador = 0; $contador < $numeroDeArgumentos; $contador++) {
     $argumento = func_get_arg($contador);
     echo ("El argumento $contador tiene el valor $argumento<br />");
     echo ("<br />");
   }

   echo ("<u>Uso de func_get_args().</u><br />");
   $matrizDeArgumentos = func_get_args();
   foreach ($matrizDeArgumentos as $contador => $argumento) {
     echo ("El argumento $contador tiene el valor $argumento<br />");
   }
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST" &&
     isset($_POST["variable1"]) &&
     isset($_POST["variable2"]) &&
     isset($_POST["variable3"])) {

   $variable1 = $_POST["variable1"];
   $variable2 = $_POST["variable2"];
   $variable3 = $_POST["variable3"];

   comprobarArgumentos($variable1, $variable2, $variable3);
 } else {
   echo "Por favor, complete todos los campos del formulario.";
 }
 ?>
