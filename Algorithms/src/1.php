<?php

/**
 * 
 */

function obtenerElementosUnicos($array)
{
    $result = [];
    $seen = [];

    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
        $element = $array[$i];
        if (!isset($seen[$element])) {
            $result[] = $element;
            $seen[$element] = true;
        }
    }

    return $result;
}

$entrada = [1, 2, 2, 3, 4, 4, 5, 6, 6];
$elementosUnicos = obtenerElementosUnicos($entrada);

print_r($elementosUnicos);
