<?php


namespace App\estructurales\flyweight;


class Jugador1
{
    public function dibuja(): string
    {
        return Camiseta::getInstance()->dibuja("1");
    }
}