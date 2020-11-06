<?php


use App\estructurales\proxy\CuentaNormal;
use App\estructurales\proxy\CuentaProxy;
use PHPUnit\Framework\TestCase;

class TestCuentas extends TestCase
{
    public function test_cuenta_normal()
    {
        $cuentaNormal = new CuentaNormal("cliente");
        $this->assertEquals("cliente", $cuentaNormal->getCLiente());
        $this->assertEquals(0, $cuentaNormal->getCantidad());

        $cuentaNormal->movimiento(10);
        $this->assertEquals(10, $cuentaNormal->getCantidad());

        $cuentaNormal->movimiento(-20);
        $this->assertEquals(-10, $cuentaNormal->getCantidad());
    }

    public function test_cuenta_nueva()
    {
        $cuentaNormal = new CuentaProxy("cliente");
        $this->assertEquals("cliente", $cuentaNormal->getCLiente());
        $this->assertEquals(0, $cuentaNormal->getCantidad());

        $cuentaNormal->movimiento(10);
        $this->assertEquals(10, $cuentaNormal->getCantidad());

        $cuentaNormal->movimiento(-20);
        $this->assertEquals(10, $cuentaNormal->getCantidad());
    }
}
