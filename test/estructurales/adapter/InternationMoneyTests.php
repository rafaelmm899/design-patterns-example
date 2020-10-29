<?php


use App\estructurales\adapter\Adapter;
use App\estructurales\adapter\BancoNostrumIml;
use App\estructurales\adapter\InternationalMoneyOrganization;
use PHPUnit\Framework\TestCase;

class InternationMoneyTests extends TestCase
{
    private InternationalMoneyOrganization $servicio;

    protected function setUp(): void
    {
        $this->servicio = new Adapter(new BancoNostrumIml());
    }

    public function test_cliente_no_existe()
    {
        $this->assertEquals(0, $this->servicio->state("No_existo"));
    }

    public function test_operaciones_con_nuevo_cliente()
    {
        $cliente = 'nuevo';
        $this->servicio->transfer(100, $cliente);
        $this->assertEquals(100, $this->servicio->state($cliente));
        $this->servicio->transfer(-70, $cliente);
        $this->assertEquals(30, $this->servicio->state($cliente));
    }
}
