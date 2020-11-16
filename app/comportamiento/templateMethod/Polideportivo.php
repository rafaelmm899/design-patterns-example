<?php


namespace App\comportamiento\templateMethod;


class Polideportivo
{
    private array $reservas;

    public function reserva(Torneo $torneo, int $horas):void
    {
        $this->reservas[$torneo->getNombre()] = $horas;
    }

    public function getReservas(): array
    {
        return $this->reservas;
    }
}