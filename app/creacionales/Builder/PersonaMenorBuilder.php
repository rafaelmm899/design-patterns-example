<?php


namespace App\creacionales\Builder;


class PersonaMenorBuilder
{
    private Persona $persona;

    public function __construct(Persona $persona)
    {
        $this->persona = $persona;
    }

    public function setColegio(string $colegio): self
    {
        $this->persona->setColegio($colegio);

        return $this;
    }

    public final function builder(): Persona
    {
        return $this->persona;
    }
}