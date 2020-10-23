<?php


namespace App\creacionales\Builder;


class PersonaMayorBuilder
{
    private Persona $persona;

    public function __construct(Persona $persona)
    {
        $this->persona = $persona;
    }

    public function setLugarTrabajo(string $lugarTrabajo): self
    {
        $this->persona->setLugarTrabajo($lugarTrabajo);
        return $this;
    }

    public final function builder(): Persona
    {
        return $this->persona;
    }
}