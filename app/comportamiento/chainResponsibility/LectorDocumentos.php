<?php


namespace App\comportamiento\chainResponsibility;


interface LectorDocumentos
{
    public function acepta(Documento $documento): bool;

    public function contenido(Documento $documento): string;
}