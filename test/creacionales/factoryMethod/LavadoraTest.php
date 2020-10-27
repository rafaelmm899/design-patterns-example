<?php


use App\creacionales\factoryMethod\Lavadora;
use App\creacionales\factoryMethod\LavadoraCargaFrontal;
use App\creacionales\factoryMethod\LavadoraCargaFrontalFactory;
use App\creacionales\factoryMethod\LavadoraCargaSuperiorFactory;
use App\creacionales\factoryMethod\LavadoraFactory;
use PHPUnit\Framework\TestCase;

class LavadoraTest extends TestCase
{
    public function test_carga_frontal()
    {
        $lavadora = new LavadoraCargaFrontalFactory();
        $cargaFrontal = $lavadora->crea();

        $this->assertEquals("frontal", $cargaFrontal->tipoCarga);
        $this->assertTrue($cargaFrontal->tieneMandos);
        $this->assertTrue($cargaFrontal->tieneTambor);
    }

    public function test_carga_superior()
    {
        $lavadora = new LavadoraCargaSuperiorFactory();
        $cargaSuperior = $lavadora->crea();

        $this->assertEquals("superior", $cargaSuperior->tipoCarga);
        $this->assertTrue($cargaSuperior->tieneMandos);
        $this->assertTrue($cargaSuperior->tieneTambor);
    }
}
