<?php

/*
Ejercicio 6: Mostrar una tabla de HTML con las tablas de multiplicar del 1 al 10.
*/

echo "<table border='1'>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>Tabla del $i</td>";
}
echo "</tr>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "</td>";
}
echo "</tr>";
echo "</table>";
