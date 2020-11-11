<?php


namespace App\comportamiento\command;


class Oficina
{
    public function recibe(TratamientoPedido $pedido): void
    {
        $pedido->tratar();
    }
}