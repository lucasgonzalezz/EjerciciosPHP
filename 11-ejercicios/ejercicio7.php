<?php

/*
Ejercicio 7: Hacer un programa que muestre todos los números impares entre dos números 
que nos lleguen por la URL ($_GET).
*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            if ($i % 2 != 0) {
                echo $i . "Es IMPAR" . "<br>";
            } else {
                echo $i . "Es PAR" . "<br>";
            }
        }
    } else {
        echo "El número 1 debe ser menor al número 2";
    }
} else {
    echo "Introduce correctamente los valores por la URL";
}
