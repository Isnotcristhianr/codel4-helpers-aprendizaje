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

function validadorCedula($cedula)
{
    $main = str_split($cedula);
    $total = 0;

    $validadormain = $main[9];

    $restador = [2, 1, 2, 1, 2, 1, 2, 1, 2];

    $respuesta = "";

    for ($i = 0; $i < 8; $i++) {
        if ($i % 2 == 0) {
            $restador[$i] = 2;
        } else {
            $restador[$i] = 1;
        }
    }

    for ($i = 0; $i < 9; $i++) {
        $multiplicacion = $main[$i] * $restador[$i];
        if ($multiplicacion >= 10) {
            $multiplicacion = $multiplicacion - 9;
        }
        $total = $total + $multiplicacion;
    }

    $total = ceil($total / 10) * 10;
    $total = $total - $total;

    if ($total == 0) {
        $respuesta = "Cedula Ecuatoriana";
    } else {
        $respuesta = "Cedula Extranjera";
    }

    echo "<script>console.log('Cedula: " . $cedula . "');</script>";
    echo "<script>console.log('Validador: " . $validadormain . "');</script>";
    echo "<script>console.log('Restador: " . implode($restador) . "');</script>";
    echo "<script>console.log('Total: " . $total . "');</script>";
    echo "<script>console.log('Respuesta: " . $respuesta . "');</script>";
}

function validadorCedula2($ceduka)
{
    $dato = str_split($ceduka);

    $mul = 1;
    $suma = 0;
    $decima = 0;

    for ($i = 0; $i < count($dato) - 1; $i++) {
        if ($i == 0) {
            $mul = $dato[$i] * 2;
            if ($mul > 9) {
                $mul = $mul - 9;
            }
            $suma += $suma + $mul;
        } else {
            $suma += $dato[$i];
        }
    }

    $decima = (floor($suma / 10) + 1) * 10;

    $decima = $decima - $suma;

    if ($decima == $dato[9]) {
        $resp = "Cedula Valida";
    } else {
        $resp = "Cedula Invalida";
    }

    //return $decima;
    echo "<script>console.log('Cedula: " . $resp . "');</script>";
}
