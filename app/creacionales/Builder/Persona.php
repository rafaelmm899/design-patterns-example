<?php


namespace App\creacionales\Builder;


class Persona
{
    private string $nombre;
    private int $edad;
    private string $municipio;
    private string $colegio;
    private string $lugarTrabajo;

    public function __construct()
    {
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function setMunicipio(string $municipio): void
    {
        $this->municipio = $municipio;
    }

    public function setColegio(string $colegio): void
    {
        $this->colegio = $colegio;
    }

    public function setLugarTrabajo(string $lugarTrabajo): void
    {
        $this->lugarTrabajo = $lugarTrabajo;
    }
}