<?php


namespace App\creacionales\factoryMethod;


class LavadoraCargaSuperiorFactory extends LavadoraFactory
{
    protected function creaLavadora(): Lavadora
    {
        $lavadora = new LavadoraCargaSuperior();
        $lavadora->lavadoraCargaSuperior();

        return $lavadora;
    }

}