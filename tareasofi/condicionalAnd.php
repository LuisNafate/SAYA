<?php
$edad=$_POST["edad"];
if ($edad>18 && $edad<66)  {
echo ("El usuario está en edad laboral.");
} else  {
 echo ("El ususario NO está en edad laboral.");

}
 ?>
