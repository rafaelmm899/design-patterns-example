<?php


namespace App\comportamiento\templateMethod;


abstract class InscripcionTemplate
{
    protected Torneo $torneo;


    public function __construct(Torneo $torneo)
    {

        $this->torneo = $torneo;
    }

    public final function getTorneo(): Torneo
    {
        return $this->torneo;
    }

    public function apunta(Solicitud $solicitud): bool
    {
        if (! $this->puedeApuntarse($solicitud)){
            return false;
        }

        if (count($this->torneo->getAceptadas()) >= $this->maximoPartipantes()){
            return false;
        }

        $this->torneo->apunta($solicitud);

        if (count($this->torneo->getAceptadas()) == $this->maximoPartipantes()){
            $this->cierraTorneo();
        }

        return true;
    }

    protected abstract function puedeApuntarse(Solicitud $solicitud): bool;

	protected abstract function maximoPartipantes(): int;

	protected abstract function cierraTorneo(): void;
}