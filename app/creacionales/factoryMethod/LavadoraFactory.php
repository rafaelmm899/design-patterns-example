<?php


namespace App\creacionales\factoryMethod;


abstract class LavadoraFactory
{
    public function crea(): Lavadora
    {
        $lavadora = $this->creaLavadora();
        $lavadora->ponerTambor();
        $lavadora->ponerMandos();

        return $lavadora;
    }
    
    abstract protected function creaLavadora(): Lavadora;
}