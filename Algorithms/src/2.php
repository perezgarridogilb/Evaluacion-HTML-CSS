<?php
/* 56 15 73 100 46 43 13 43 16 17
71 88 173 146 89 56 56 59 33
159 261 319 235 145 112 115 92
420 580 554 380 257 227 207
1000 1134 934 637 484 434
2134 2068 1571 1121 918
4202 3639 2692 2039
7841 6331 4731
14172 11062
25234 */
function esNumeroValido(&$cadena)
{

    if (preg_match('/^[0-9]+(\.[0-9]+)?$/', $cadena)) {
        return true;
    } else {
        return false;
    }
}

$cadena = 1;
if (esNumeroValido($cadena)) {
    echo "Es un número válido: $cadena";
} else {
    echo "No es un número válido.";
}
