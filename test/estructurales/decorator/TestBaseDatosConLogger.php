<?php


use App\estructurales\decorator\BaseDatos;
use App\estructurales\decorator\BaseDatosMemoria;
use App\estructurales\decorator\Logger;
use App\estructurales\decorator\LoggerDecorator;
use PHPUnit\Framework\TestCase;

class TestBaseDatosConLogger extends TestCase
{
    private Logger $logger;
	private BaseDatos $sinLogger;
	private BaseDatos $bbdd;
	
	public function setUp(): void
    {
        $this->logger = new Logger();
        $this->sinLogger = new BaseDatosMemoria();
        $this->bbdd = new LoggerDecorator($this->sinLogger, $this->logger);
	}

    public function test_logger_decorator()
    {
        $this->assertNotNull($this->bbdd, "falta inicializar bbdd en el metodo init()",);
        $this->assertFalse(in_array("inserta entrada",$this->logger->obtener()), "logger no esta vacio");
        $this->bbdd->inserta("entrada");

        $this->assertTrue(in_array("entrada", $this->sinLogger->registros()), "bbdd no ha recibido entrada");
        $this->assertTrue(in_array("inserta entrada", $this->logger->obtener()), "no se ha registrado la entrada");

        $registros = $this->bbdd->registros();

        $this->assertTrue(in_array("entrada", $registros), "el adapter no tiene la nueva entrada");
        $this->assertTrue(in_array("lectura", $this->logger->obtener()), "no se ha registrado la lectura");

	}
}
