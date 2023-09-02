<?php

function generarArrayAleatorio($min, $max, $cantidad)
{
    $array = [];
    for ($i = 0; $i < $cantidad; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

function sumarParesAdyacentes($array)
{
    $resultado = [];
    $cantidad = count($array);
    for ($i = 0; $i < $cantidad - 1; $i++) {
        $resultado[] = $array[$i] + $array[$i + 1];
    }
    return $resultado;
}

function mostrarArray($array)
{
    echo implode(' ', $array) . "\n";
}

$arrayInicial = generarArrayAleatorio(1, 100, 10);
mostrarArray($arrayInicial);

while (count($arrayInicial) > 1) {
    $arrayInicial = sumarParesAdyacentes($arrayInicial);
    mostrarArray($arrayInicial);
}
