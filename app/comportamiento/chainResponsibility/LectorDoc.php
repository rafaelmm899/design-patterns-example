<?php


namespace App\comportamiento\chainResponsibility;


class LectorDoc implements LectorDocumentos
{
    public function acepta(Documento $documento): bool
    {
        return $documento->getTipo() == "doc";
    }

    public function contenido(Documento $documento): string
    {
        return "doc " . $documento->getContenido();
    }
}