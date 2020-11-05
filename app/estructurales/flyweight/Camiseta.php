<?php


namespace App\estructurales\flyweight;

class Camiseta
{
    private static ?Camiseta $instance = null;
    private static string $camiseta = "\n\n------ jugador X -----\n\n";

    public function dibuja(string $number): string
    {
        return str_replace("X", $number,self::$camiseta);
    }

    public static function getInstance(): Camiseta
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

}