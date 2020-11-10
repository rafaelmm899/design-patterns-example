<?php


namespace App\comportamiento\chainResponsibility;


class Documento
{
    private string $tipo;
    private string $contenido;

    public function __construct(string $tipo, string $contenido)
    {
        $this->tipo = $tipo;
        $this->contenido = $contenido;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getContenido(): string
    {
        return $this->contenido;
    }

}