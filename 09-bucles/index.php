 <?php

    /*
    Bucle While
    Estructura de control que itera o repite la ejecución 
    de una serie de instrucciones tantas veces como sea necesario, 
    en base a una condición.

    while(condición){
        bloque de instrucciones
    }
    */

    $numero = 0;

    while ($numero <= 100) {
        echo $numero;
        if ($numero != 100) {
            echo ', ';
        }
        $numero++;
    }

    // Ejemeplo while

    if (isset($_GET['numero'])) {
        $numero = (int)$_GET['numero'];
    } else {
        $numero = 1;
    }

    echo "<h1>Tabla de multiplicar del número $numero</h1>";

    $contador = 0;
    while ($contador <= 10) {
        echo "$numero x $contador = " . ($numero * $contador) . "<br>";
        $contador++;
    }

    /*
    Bucle Do While
    do {
        bloque de instrucciones
    } while (condición);
    */

    $edad = 18;
    $contador = 1;

    do {
        echo "Tienes acceso al local privado $contador <br>";
        $contador++;
    } while ($edad >= 18 && $contador <= 10);
