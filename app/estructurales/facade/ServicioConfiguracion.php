<?php


namespace App\estructurales\facade;


class ServicioConfiguracion
{
    public function addEmail(string $cliente, string $email): void
    {
        BBDD::getInstance()->setEmail($cliente, $email);
    }
}