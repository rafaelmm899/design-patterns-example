<?php


namespace App\creacionales\factoryMethod;


class LavadoraCargaFrontalFactory extends LavadoraFactory
{
    protected function creaLavadora(): Lavadora
    {
        $lavadora = new LavadoraCargaFrontal();
        $lavadora->lavadoraCargaFrontal();

        return $lavadora;
    }

}