<?php


use App\estructurales\facade\BBDD;
use App\estructurales\facade\Facade;
use App\estructurales\facade\PreferenciasComunicacion;
use App\estructurales\facade\ServicioComunicacion;
use App\estructurales\facade\ServicioConfiguracion;
use App\estructurales\facade\ServicioFidelizacion;
use App\estructurales\facade\Tipo;
use PHPUnit\Framework\TestCase;

class TestFacade extends TestCase
{
    private string $nombreCliente = 'Antonia';
    private string $emailCliente = 'antonia@email.com';

    protected function setUp(): void
    {
        BBDD::getInstance()->clear();
    }

    public function test_original()
    {
        $configuracion = new ServicioConfiguracion();
        $fidelizacion = new ServicioFidelizacion();
        $comunicacion = new ServicioComunicacion();

        $fidelizacion->crearTarjeta($this->nombreCliente, new Tipo(Tipo::BASICA));
        $configuracion->addEmail($this->nombreCliente, $this->emailCliente);

        $preferencias = new PreferenciasComunicacion(false, true, true);
        $comunicacion->setPreferencias($this->nombreCliente, $preferencias);

        $this->compruebaInscripion();
    }

    public function test_facade()
    {
        $facade = new Facade();
        $facade->registroExpress($this->nombreCliente, $this->emailCliente);

        $this->compruebaInscripion();
    }

    private function compruebaInscripion()
    {
        $this->assertEquals(new Tipo(Tipo::BASICA), BBDD::getInstance()->getTarjeta($this->nombreCliente));
        $this->assertEquals($this->emailCliente, BBDD::getInstance()->getEmail($this->nombreCliente));
        $preferencias = BBDD::getInstance()->getPreferencias($this->nombreCliente);

        $this->assertNotNull($preferencias);

        $this->assertFalse( $preferencias->isEmailDiario(), "no recibe email diario");
        $this->assertTrue( $preferencias->isEmailSemanal(), "recibe email semanal");
        $this->assertTrue( $preferencias->isEmailHtml(), "recibe email html");
    }
}
