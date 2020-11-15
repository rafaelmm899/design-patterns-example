<?php


use App\comportamiento\mediator\Coche;
use App\comportamiento\mediator\Radio;
use App\comportamiento\mediator\SistemaMediator;
use App\comportamiento\mediator\Telefono;
use PHPUnit\Framework\TestCase;

class TestSistema extends TestCase
{
    private Radio $radio;
    private Telefono $telefono;
    private Coche $coche;

    protected function setUp(): void
    {
        $this->radio = new Radio();
        $this->telefono = new Telefono();
        $this->coche = new Coche();
        new SistemaMediator($this->coche, $this->radio, $this->telefono);
    }

    public function test_encender_apagar_coche()
    {
        $this->assertFalse($this->radio->encendida());
        $this->assertFalse($this->telefono->musicaEncendida());

        $this->telefono->enciendeMusica();
        $this->assertTrue($this->telefono->musicaEncendida());

        $this->coche->enciende();

        $this->assertTrue($this->radio->encendida());
        $this->assertFalse($this->telefono->musicaEncendida());

        $this->coche->apaga();
        $this->assertFalse($this->radio->encendida());
    }

    public function test_suena_telefono()
    {
        $this->radio->enciende();
        $this->assertTrue($this->radio->encendida());

        $this->telefono->recibeLlamada();

        $this->assertFalse($this->radio->encendida());
    }

    public function test_enciende_radio()
    {
        $this->telefono->enciendeMusica();
        $this->assertTrue($this->telefono->musicaEncendida());

        $this->radio->enciende();

        $this->assertFalse($this->telefono->musicaEncendida());
    }
}
