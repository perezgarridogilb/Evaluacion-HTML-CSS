<?php
function esNumeroValido(&$cadena)
{

    if (preg_match('/^[0-9]+(\.[0-9]+)?$/', $cadena)) {
        return true;
    } else {
        return false;
    }
}

$cadena = 2.0;
if (esNumeroValido($cadena)) {
    echo "Es un número válido: $cadena";
} else {
    echo "No es un número válido.";
}
