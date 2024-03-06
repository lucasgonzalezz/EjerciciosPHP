<?php

$numero = 77;
$numero1 = 33;

echo 'Suma: '.($numero + $numero1).'<br>';
echo 'Resta: '.($numero - $numero1).'<br>';
echo 'Multiplicación: '.($numero * $numero1).'<br>';
echo 'División: '.($numero / $numero1).'<br>';
echo 'Módulo: '.($numero % $numero1).'<br>';

// Operadores de incremento y decremento
$year = 2019;

$year++;
$year--;

++$year;
--$year;

echo '<h1>'.$year.'</h1>';

// Operadores de asignación
$edad = 55;

echo $edad.'<br>';
echo ($edad+=5).'<br>';
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';

?>