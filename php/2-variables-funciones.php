<?php

//##################### FUNCIONES DE MANEJO DE VARIABLES

// ➤boolval — Obtener el valor booleano de una variable

    $cero = 0;
    $entero = 11;
    $flotante = 77.77;
    $flotanteCero = 0.0;
    $string = "Carlos";
    $stringCero = "0";
    $stringVacio = "";
    $stringComillaSimple = "'";

    echo 'Variable con valor ' . $cero . " es "  . (boolval($cero) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $entero . " es "  . (boolval($entero) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $flotante . " es "  . (boolval($flotante) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $flotanteCero . " es "  . (boolval($flotanteCero) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $string . " es "  . (boolval($string) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $stringCero . " es "  . (boolval($stringCero) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $stringVacio . " es "  . (boolval($stringVacio) ? 'true' : 'false')."<br>";
    echo 'Variable con valor ' . $stringComillaSimple . " es "  . (boolval($stringComillaSimple) ? 'true' : 'false')."<br><br><br>";

        //NOTA: el argumento 'true' y 'false' puede cambiarse por cualquier otro valor, por ejemplo "1" y "0", "a" o "b", etc., respectivamente
        //echo 'Variable con valor ' . $cero . " es "  . (boolval(0) ? '1' : '0')."<br>";


// ➤floatval — Obtener el valor flotante de una variable
//      De una variable, ejemplo STRING, que contenga un numero flotante, se puede sustraer el flotante!

$var = '122.34343asdasasasdadASDDASD&//(%/&%$&/%';
$var2 = '122.34343 Esta variable contiene un numero flotante, pero es STRING ';
$var3 = '122.aaaaaaaaaaaaaa34343 ';
$var4 = 'aaazzzzxxxxxx1212121122.34343';
$var5 = '1 2 2 .  34343 ';

echo floatval($var)."<br>"; // 122.34343 :)
echo floatval($var2)."<br>"; // 122.34343 :)
echo floatval($var3)."<br>"; // 122 : Solo procesa lo que está antes de cualquier caracter :(
echo floatval($var4)."<br>"; // 0: Si tiene otros caracteres a inicio, no lo procesa. :(
echo floatval($var5)."<br>"; // 1: Solo procesa lo que está antes de cualquier caracter :(








?>