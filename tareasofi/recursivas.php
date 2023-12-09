<?php
function factorial($num)
{
    if ($num == 0) {
        return 1;
    } else {
        $valor = $num * factorial($num - 1);
        return $valor;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
    $original = $_POST["numero"];
    if (is_numeric($original) && $original >= 0 && is_int($original + 0)) {
        $valor = factorial($original);
        echo "El factorial de $original es $valor.<br/>";
    } else {
        echo "El número proporcionado no es válido para calcular el factorial.";
    }
} else {
    echo "No se proporcionó un número válido.";
}
?>
