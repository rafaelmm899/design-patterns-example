<?php


use App\comportamiento\command\PedidoInternacional;
use App\comportamiento\command\TratamientoPedidoInternacional;
use PHPUnit\Framework\TestCase;

class PedidoInternacionalTest extends TestCase
{
    public function test()
    {
        $tratamientoKO = new TratamientoPedidoInternacional(new PedidoInternacional("Mordor", 100));
        $this->assertFalse($tratamientoKO->tratar());

        $tratamientoKO = new TratamientoPedidoInternacional(new PedidoInternacional("Comarca", 100));
        $this->assertTrue($tratamientoKO->tratar());
    }
}
