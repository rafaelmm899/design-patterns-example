<?php


namespace App\comportamiento\templateMethod;


class InscripcionTenis extends InscripcionTemplate
{
    protected Polideportivo $polideportivo;

    public function __construct(Polideportivo $polideportivo)
    {
        parent::__construct(new Torneo("torneo tenis"));

        $this->polideportivo = $polideportivo;
    }

    protected function puedeApuntarse(Solicitud $solicitud): bool
    {
        if ($solicitud->getEdad() < 10){
            return false;
        }

        return true;
    }

    protected function maximoPartipantes(): int
    {
        return 4;
    }

    protected function cierraTorneo(): void
    {
        $this->polideportivo->reserva($this->torneo, 8);
    }
}