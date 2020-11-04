<?php


namespace App\estructurales\facade;


class Facade
{
    public function registroExpress(string $nombre, string $email)
    {
        $configuracion = new ServicioConfiguracion();
        $fidelizacion = new ServicioFidelizacion();
        $comunicacion = new ServicioComunicacion();

        $fidelizacion->crearTarjeta($nombre, new Tipo(Tipo::BASICA));
        $configuracion->addEmail($nombre, $email);
        $preferencias = new PreferenciasComunicacion(false, true, true);
        $comunicacion->setPreferencias($nombre, $preferencias);
    }
}