<?php


namespace App\estructurales\flyweight;


class Jugador3
{
    public function dibuja(): string
    {
        return Camiseta::getInstance()->dibuja("3");
    }
}