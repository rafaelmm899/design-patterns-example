<?php


namespace App\comportamiento\templateMethod;


class Torneo
{
    private string $nombre;

    /** @var Solicitud[] $aceptadas */
    private array $aceptadas;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $this->aceptadas = [];
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getAceptadas(): array
    {
        return $this->aceptadas;
    }

    public function apunta(Solicitud $solicitud): void
    {
        $this->aceptadas[] = $solicitud;
    }
}