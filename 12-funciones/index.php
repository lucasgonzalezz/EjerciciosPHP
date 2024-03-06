<?php

/*
    FUNCIONES: Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y 
    que pueden reutilizarse solamente invocando a la función tantas veces como queramos.
*/

// Ejemplo 1
function muestraNombres()
{
    echo "Victor <br>";
    echo "Antonio <br>";
    echo "Pedro <br>";
    echo "Manuel <br>";
    echo "David <br>";
    echo "<hr>";
}

// Invocar función
muestraNombres();

// Ejemplo 2
function tabla($numero)
{
    echo "<h3> Tabla de multiplicar del número: $numero </h3>";
    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
    echo "<hr>";
} else {
    echo "No hay número para multiplicar";
}

// Ejemplo 3

for ($i = 1; $i <= 10; $i++) {
    tabla($i);
}
echo "<hr>";

// Ejemplo 4
function calculadora($numero1, $numero2, $negrita = false)
{
    // Conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita) {
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br>";
    $cadena_texto .= "Resta: $resta <br>";
    $cadena_texto .= "Multiplicación: $multiplicacion <br>";
    $cadena_texto .= "División: $division <br>";

    if ($negrita) {
        $cadena_texto .= "</h1>";
    }

    return $cadena_texto;
}

echo calculadora(10, 30);
echo "<hr>";
echo calculadora(10, 30, true);
echo "<hr>";

// Ejemplo 5
function getNombre($nombre)
{
    $nombre = "El nombre es: $nombre";
    return $nombre;
}

function getApellidos($apellidos)
{
    $apellidos = "Los apellidos son: $apellidos";
    return $apellidos;
}

function devuelveElNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre)
        . "<br>"
        . getApellidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Victor", "Robles Gómez");
