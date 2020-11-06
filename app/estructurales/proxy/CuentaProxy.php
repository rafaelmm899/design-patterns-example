<?php


namespace App\estructurales\proxy;


class CuentaProxy implements Cuenta
{
    private CuentaNormal $cuentaNormal;

    public function __construct(string $cliente)
    {
        $this->cuentaNormal = new CuentaNormal($cliente);
    }

    public function getCLiente(): string
    {
        return $this->cuentaNormal->getCLiente();
    }

    public function getCantidad(): int
    {
        return $this->cuentaNormal->getCantidad();
    }

    public function movimiento(int $importe): void
    {
        $cantidad = $this->cuentaNormal->getCantidad();
        $resultado = $cantidad + $importe;

        if ($resultado > 0){
            $this->cuentaNormal->movimiento($importe);
        }
    }


}