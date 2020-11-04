<?php


namespace App\estructurales\facade;


class ServicioComunicacion
{
    public function setPreferencias(string $cliente, PreferenciasComunicacion $preferencias): void
    {
        BBDD::getInstance()->setPreferencias($cliente, $preferencias);
    }
}