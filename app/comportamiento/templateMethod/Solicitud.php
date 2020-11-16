<?php


namespace App\comportamiento\templateMethod;


class Solicitud
{
    private string $nombre;
    private int $edad;
    private float $peso;

    public function __construct(string $nombre, int $edad, float $peso)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->peso = $peso;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

}