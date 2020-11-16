<?php


namespace App\comportamiento\templateMethod;


class InscripcionLucha extends InscripcionTemplate
{
    protected Polideportivo $polideportivo;

    public function __construct(Polideportivo $polideportivo)
    {
        parent::__construct(new Torneo("torneo lucha"));

        $this->polideportivo = $polideportivo;
    }

    protected function puedeApuntarse(Solicitud $solicitud): bool
    {
        if ($solicitud->getEdad() < 15){
            return false;
        }

        if ($solicitud->getPeso() < 60){
            return false;
        }

        return true;
    }

    protected function maximoPartipantes(): int
    {
        return 6;
    }

    protected function cierraTorneo(): void
    {
        $this->polideportivo->reserva($this->torneo, 4);
    }
}