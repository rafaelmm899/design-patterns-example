<?php


namespace App\creacionales\factoryMethod;


abstract class Lavadora
{
    public bool $tieneTambor;
    public bool $tieneMandos;
    public string $tipoCarga;

    public function ponerTambor(): void
    {
        $this->tieneTambor = true;
    }

    public function ponerMandos(): void
    {
        $this->tieneMandos = true;
    }

}