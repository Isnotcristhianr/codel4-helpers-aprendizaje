<?php

function biciesto($anio)
{
    if (($anio % 4 == 0 && $anio % 100 != 0) || ($anio % 400 == 0)) {
        return "Es biciesto";
    } else {
        return "No es biciesto";
    }
}
