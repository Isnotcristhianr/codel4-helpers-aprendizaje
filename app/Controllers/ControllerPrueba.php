<?php

namespace App\Controllers;

class ControllerPrueba extends BaseController
{

    //bienvenida form
    public function Bienvenida()
    {
        return view('prueba');
    }	

    //recibir datos
    public function RecibirDatos()
    {
        $nombre = $this->request->getGet('nameform');
        $cedula = $this->request->getGet('cedulaform');
        $fecha = $this->request->getGet('dateform');

        //obtener año
        $date = date_create($fecha."");
        $anio = date_format($date,"Y");

        //biciesto
        $respBiciesto = biciesto($anio);

        
        /* echo "Nombre: ".$nombre."<br>";
        echo "Cedula: ".$cedula."<br>";
        echo "Fecha Nacimiento: ".$fecha."<br>";
        echo "Año: ".$anio."<br>";
        echo "Biciesto: ".$respBiciesto."<br>"; */

        $datos = [
            'nombre' => $nombre,
            'cedula' => $cedula,
            'fecha' => $fecha,
            'anio' => $anio,
            'biciesto' => $respBiciesto
        ];

        return view('datos', $datos);
        
    }

}