<?php


namespace App\estructurales\proxy;


class CuentaNormal implements Cuenta
{
    private string $cliente;
    private int $cantidad;

    public function __construct(string $cliente)
    {
        $this->cliente = $cliente;
        $this->cantidad = 0;
    }

    public function getCLiente(): string
    {
        return $this->cliente;
    }

    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    public function movimiento(int $importe): void
    {
        $this->cantidad += $importe;
    }

}