<?php


namespace App\comportamiento\chainResponsibility;


class LectorPdf implements LectorDocumentos
{
    public function acepta(Documento $documento): bool
    {
        return $documento->getTipo() == "pdf";
    }

    public function contenido(Documento $documento): string
    {
        return "pdf " . $documento->getContenido();
    }

}