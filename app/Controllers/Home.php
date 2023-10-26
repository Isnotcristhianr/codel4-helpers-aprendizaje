<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function saludo(): string
    {
        return view('bienvenida');
    }

    public function form(): void
    {
        $nombre = $this->request->getGet('nombre');
        $apellido = $this->request->getGet('apellido');
        $clave = $this->request->getGet('clave');
        $cedula = $this->request->getGet('cedula');

        //print_r(saludo());

        $c = separar($cedula);
        $validador = validadorCedula2($cedula);

        $validador2 = validadorCedula2($cedula);

        $m = ["nombre" => $nombre, "apellido" => $apellido, "clave" => $clave, "cedula" => $cedula, "caracteres" => $c, "Validador: " => $validador, "Validador2: " => $validador2];

        //  print_r($m);

        echo view('form', $m);
    }
}
