<!DOCTYPE html>
<html>
<head>
    <title>Ciudad Seleccionada</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ciudad"])) {
        $ciudad_seleccionada = $_POST["ciudad"];
        echo "<h2>Ciudad seleccionada:</h2>";
        echo "<h1>$ciudad_seleccionada</h1>";
    } else {
        echo "No se ha seleccionado una ciudad válida.";
    }
    ?>
</body>
</html>
