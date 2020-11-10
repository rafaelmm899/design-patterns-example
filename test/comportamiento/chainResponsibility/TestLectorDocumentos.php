<?php


use App\comportamiento\chainResponsibility\Documento;
use App\comportamiento\chainResponsibility\LectorDoc;
use App\comportamiento\chainResponsibility\LectorOdt;
use App\comportamiento\chainResponsibility\LectorPdf;
use App\comportamiento\chainResponsibility\ProcesadorDocumentos;
use PHPUnit\Framework\TestCase;

class TestLectorDocumentos extends TestCase
{
    public function test()
    {
        $lectores = [
            new LectorDoc(),
            new LectorPdf(),
            new LectorOdt(),
        ];

        $lista = [
            new Documento("doc", "documento doc"),
            new Documento("pdf", "documento pdf"),
            new Documento("odt", "documento odt"),
        ];

        $resultado = (new ProcesadorDocumentos($lectores))->concatena($lista);

        $esperado = "doc documento doc\n" .
        "pdf documento pdf\n" .
        "odt documento odt\n";

        $this->assertEquals($esperado, $resultado);
    }
}
