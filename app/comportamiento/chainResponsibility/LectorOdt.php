<?php


namespace App\comportamiento\chainResponsibility;


class LectorOdt implements LectorDocumentos
{
    public function acepta(Documento $documento): bool
    {
        return $documento->getTipo() == "odt";
    }

    public function contenido(Documento $documento): string
    {
        return "odt " . $documento->getContenido();
    }


}