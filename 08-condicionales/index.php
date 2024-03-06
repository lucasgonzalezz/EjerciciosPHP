<?php

/*
Condicionales

if(condición){
    instrucciones
} else {
    otras instrucciones
}
*/

/*
Operadores de comparación
== igual
=== identico
!= diferente
<> diferente
!== no identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
*/

// Ejemplo 1
$color = 'rojo';

if ($color == 'rojo') {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}

echo '<br>';

// Ejemplo 2
$year = 2020;

if ($year < 2020) {
    echo 'Estamos en una era anterior a 2020';
} else {
    echo 'Estamos en la era moderna';
}

echo '<br>';

// Ejemplo 3
$nombre = 'David';
$ciudad = 'Madrid';
$continente = 'Europa';
$edad = 49;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor de edad</h1>";

    if ($continente == 'Europa') {
        echo "<h2>Y es de $ciudad</h2>";
    } else {
        echo 'No es europeo';
    }
} else {
    echo "<h2>$nombre no es mayor de edad</h2>";
}

// Ejemplo 4
/*
$dia = 4;

if ($dia == 1) {
    echo 'Es Lunes';
} else {
    if ($dia == 2) {
        echo 'Es Martes';
    } else {
        if ($dia == 3) {
            echo 'Es Miércoles';
        } else {
            if ($dia == 4) {
                echo 'Es Jueves';
            } else {
                if ($dia == 5) {
                    echo 'Es Viernes';
                } else {
                    echo 'Es fin de semana';
                }
            }
        }
    }
}
*/

if ($dia == 1) {
    echo 'Lunes';
} elseif ($dia == 2) {
    echo 'Martes';
} elseif ($dia == 3) {
    echo 'Miércoles';
} elseif ($dia == 4) {
    echo 'Jueves';
} elseif ($dia == 5) {
    echo 'Viernes';
} else {
    echo 'Fin de semana';
}

echo '<br>';

// Ejemplo 5
$pais = 'Mexico';
if ($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
    echo 'En este país se habla español';
} else {
    echo 'No se habla español';
}

echo '<br>';

// Switch
switch ($dia) {
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break;
    case 3:
        echo 'Miércoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    default:
        echo 'Fin de semana';
        break;
}

// Goto, va directamente a la marca
goto marca;
echo '<h3>Instrucción 1</h3>';
echo '<h3>Instrucción 2</h3>';
echo '<h3>Instrucción 3</h3>';
echo '<h3>Instrucción 4</h3>';

marca:
echo 'Me he saltado 4 echos';