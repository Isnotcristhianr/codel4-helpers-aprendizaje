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

        print_r(saludo());

        $m = ["nombre" => $nombre, "apellido" => $apellido, "clave" => $clave];

      //  print_r($m);

        //echo view('form', $m);
    }

}
