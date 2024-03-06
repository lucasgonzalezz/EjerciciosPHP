<?php

// Debugging
$nombre = "Victor Robles";
var_dump($nombre);

// Fechas
echo date('d-m-y');
echo "<br>";
echo time();

// Matemáticas
echo "<br>";
echo "Raíz cuadrada de 10: " . sqrt(10);

echo "<br>";
echo "Número aleatorio entre 10 y 40: " . rand(10, 40);

echo "<br>";
echo "Número PI: " . pi();

echo "<br>";
echo "Redondear: " . round(7.891234, 2);

// Más funciones generales
echo "<br>";
echo gettype($nombre);

// Detectar tipado
if (is_string($nombre)) {
    echo "<br> $nombre es un string";
}

if (!is_float($nombre)) {
    echo "<br> $nombre no es un número con decimales";
}

// Comprobar si existe una variable
echo "<br>";
if (isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

// Limpiar espacios
echo "<br>";
$frase = "       mi contenido       ";
var_dump(trim($frase));

// Eliminar variables / índices
echo "<br>";
$year = 2020;
unset($year);
// var_dump($year);

// Comprobar variable vacía
echo "<br>";
$texto = "";
if (empty(trim($texto))) {
    echo "La variable texto está vacía";
} else {
    echo "La variable texto tiene contenido";
}

// Contar caracteres de un string
echo "<br>";
$cadena = "12345";
echo strlen($cadena);

// Encontrar caracteres
echo "<br>";
$frase = "La vida es bella";
echo strpos($frase, "vida");

// Reemplazar palabras de un string
echo "<br>";
$frase = str_replace("vida", "moto", $frase);
echo $frase;

// Mayúsculas y minúsculas
echo "<br>";
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
echo "<br>";
echo ucfirst($frase);
echo "<br>";
echo ucwords($frase);
echo "<br>";
