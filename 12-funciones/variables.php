<?php

/*
    VARIABLES LOCALES: Son las que se definen dentro de una función y 
    no pueden ser usadas fuera de la función, solo están disponibles dentro. A no ser que hagamos un return.

    VARIABLES GLOBALES: Son las que se declaran fuera de una función y 
    están disponibles dentro y fuera de las funciones.
*/

$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo()
{
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo holaMundo();

// Funciones variables

function buenosDias()
{
    return "Hola! Buenos días :)";
}

function buenasTardes()
{
    return "Hey! Qué tal ha ido la comida?";
}

function buenasNoches()
{
    return "Te vas a dormir ya? Buenas noches!";
}

$horario = "Noches";

$miFuncion = "buenas" . $horario;
echo $miFuncion();
