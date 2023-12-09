<?php
$edad=$_POST["edad"];


if ($edad > 18)  {
 echo ("El usuario es mayor de edad.")."<br>";
 }
 if ($edad > 65)  {
  echo ("El usuario está jubilado")."<br>";
  }

?>
