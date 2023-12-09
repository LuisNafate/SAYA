
  <?php
  function cuadrado($numero) {
    $numero *= $numero;
    return $numero;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $numero = $_POST["numero"];
    $cuadrado = cuadrado($numero);
    echo "El cuadrado del número $numero es $cuadrado.";
  }
  ?>
