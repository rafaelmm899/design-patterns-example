<?php


namespace App\creacionales\factoryMethod;


class LavadoraCargaSuperior extends Lavadora
{
    public function lavadoraCargaSuperior(): void{
        $this->tipoCarga = "superior";
    }
}