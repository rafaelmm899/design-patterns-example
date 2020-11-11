<?php


namespace App\comportamiento\command;


class TratamientoPedidoMultiple implements TratamientoPedido
{
    private array $pedidos;

    public function __construct(array $pedidos)
    {
        $this->pedidos = $pedidos;
    }

    public function tratar(): bool
    {
        return true;
    }
}