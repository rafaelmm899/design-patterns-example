<?php


namespace App\estructurales\flyweight;


class Jugador2
{
    public function dibuja(): string
    {
        return Camiseta::getInstance()->dibuja("2");
    }
}