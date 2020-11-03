<?php


namespace App\estructurales\decorator;


class BaseDatosMemoria implements BaseDatos
{
    private array $valores = [];
    
    public function inserta(string $registro): void
    {
        $this->valores[] = $registro;
    }

    public function registros(): array
    {
        return $this->valores;
    }
    
}