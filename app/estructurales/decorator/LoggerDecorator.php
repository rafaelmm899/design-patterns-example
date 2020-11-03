<?php


namespace App\estructurales\decorator;


class LoggerDecorator implements BaseDatos
{
    private BaseDatos $baseDatos;
    private Logger $logger;

    public function __construct(BaseDatos $baseDatos, Logger $logger)
    {
        $this->baseDatos = $baseDatos;
        $this->logger = $logger;
    }

    public function inserta(string $registro): void
    {
        $this->logger->add("inserta " . $registro);
        $this->baseDatos->inserta($registro);
    }

    public function registros(): array
    {
        $this->logger->add("lectura");
        return $this->baseDatos->registros();
    }
}