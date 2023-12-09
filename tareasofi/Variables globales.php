<?php
function cuadrado ($valor) {
  global $numero;
  $cuadrado=$valor*$valor;
  echo "El cuadrado es de $valor es $cuadrado .<br/>";
  echo "La variable \$numero dentro de la funcion vale $numero y es de tipo ".gettype ($numero)."<br/>";
}
$numero=$_POST["numero"];
$cuadrado = cuadrado($numero);
echo "La variable \$numero fuera de la funcion vale $numero y es de tipo ".gettype ($numero). "<br/>";
echo "La variable \$cuadrado fuera de la funcion vale $cuadrado y es de tipo ".gettype ($cuadrado). "<br/>";
 ?>
