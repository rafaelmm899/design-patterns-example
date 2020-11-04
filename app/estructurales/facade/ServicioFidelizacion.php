<?php


namespace App\estructurales\facade;


class ServicioFidelizacion
{
    public function crearTarjeta(string $cliente, Tipo $tipo): void
    {
        BBDD::getInstance()->addTarjetas($cliente, $tipo);
    }
}