<?php


namespace App\creacionales\Builder;


class PersonaBuilder
{
    protected Persona $persona;

    public function __construct(string $nombre)
    {
        $this->persona = new Persona();
        $this->persona->setNombre($nombre);
    }

    public function setMunicipio(string $munipio): self
    {
        $this->persona->setMunicipio($munipio);
        return $this;
    }

    public function setMayor(int $edad): PersonaMayorBuilder
    {
        $this->persona->setEdad($edad);
        return new PersonaMayorBuilder($this->persona);
    }

    public function setMenor(int $edad): PersonaMenorBuilder
    {
        $this->persona->setEdad($edad);
        return new PersonaMenorBuilder($this->persona);
    }
}