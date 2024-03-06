<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla</title>
</head>

<body>

    <?php

    // Imprimir por pantalla y . para concatenar
    echo "<h1>Master en PHP</h1>";
    echo "<ul>"
        . "<li>Listado 1</li>"
        . "<li>Listado 2</li>"
        . "</ul>";

    echo "<p>Esto es un párrafo" . "-" . "hola mundo desde PHP</p>";

    ?>

    <!-- Imprimir por pantalla directamente con PHP -->
    <?= "hola" ?>

</body>

</html>