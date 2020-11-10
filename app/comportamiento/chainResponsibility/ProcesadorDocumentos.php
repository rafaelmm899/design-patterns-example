<?php


namespace App\comportamiento\chainResponsibility;


class ProcesadorDocumentos
{
    private array $lectores;

    public function __construct(array $lectores)
    {
        $this->lectores = $lectores;
    }

    public function concatena(array  $documentos): string
    {
        $resultado = "";

        /** @var Documento $documento */
        foreach ($documentos as $documento){
            /** @var LectorDocumentos $lector */
            foreach ($this->lectores as $lector){
                if ($lector->acepta($documento)){
                    $resultado .= $lector->contenido($documento);
                }
            }
            $resultado .= "\n";
        }

        return $resultado;
    }
}