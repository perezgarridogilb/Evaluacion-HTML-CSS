<?php

function encontrarIndice($array, $elemento)
{
    foreach ($array as $indice => $valor) {
        if ($valor === $elemento) {
            return $indice;
        }
    }
    return -1;
}

// Test Case 1
$lista1 = [1, 2, 1, 3, 2, 4, 2, 3, 3, 1, 3, 3];
$elemento1 = 2;
$resultado1 = encontrarIndice($lista1, $elemento1);
echo "Resultado Test Case 1: $resultado1\n"; // Debería imprimir 1

// Test Case 2
$lista2 = [1, 2, 3, 4];
$elemento2 = 5;
$resultado2 = encontrarIndice($lista2, $elemento2);
echo "Resultado Test Case 2: $resultado2\n";
