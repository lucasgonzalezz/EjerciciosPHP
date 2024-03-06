<?php

/*
Ejercicio 3: Escribir un programa que imprima por pantalla los cuadrados 
(un número multiplicado por sí mismo) de los 40 primeros números naturales.
PD: Utilizar bucle while
*/

$contador = 0;

while ($contador <= 40) {
    echo "El cuadrado de $contador es: " . ($contador * $contador) . "<br>";
    $contador++;
}

for ($i = 1; $i <= 40; $i++) {
    echo "El cuadrado de $i es: " . ($i * $i) . "<br>";
}
