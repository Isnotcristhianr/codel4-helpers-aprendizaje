<?php


function saludo()
{
    return "Hola soy helper";
}

function suma($a, $b)
{
    return $a + $b;
}

function separar($ced)
{
    $cedula = str_split($ced);
    return $cedula;

    /* separar con caracteres
     $dato = explode("", $ced);
    $dato[0];
    return $dato; */
}
