<?php
$edad=$_POST["edad"];

if ($edad<=10)  {
  echo ("El usuario tiene de 0 a 10 años.")."<br>";
} elseif  ($edad<=20) {
  echo ("El usuario tiene de 11 a 20 años.")."<br>";
} elseif ($edad<=30) {
  echo ("El usuario tiene de 21 a 30 años.")."<br>";
} elseif ($edad<=40) {
  echo ("El ususario tiene de 31 a 40 años.")."<br>";
} elseif ($edad<=50) {
  echo ("El usuario tiene de 41 a 50 años.")."<br>";
} elseif ($edad<=60) {
  echo ("El usuario tiene de 51 a 60 años.")."<br>";
} elseif ($edad<=70) {
  echo ("El usuario tiene de 61 a 70 años.")."<br>";
} elseif ($edad<=80) {
  echo ("El usuario tiene de 71 a 80  años.")."<br>";
} elseif ($edad<=90) {
echo ("El usuario tiene de 81 a 90 años.")."<br>";
} else {
  echo ("El usuario tiene de más de 90 años.");
}
 ?>
