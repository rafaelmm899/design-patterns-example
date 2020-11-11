<?php


namespace App\comportamiento\command;


class TratamientoPedidoPeligroso implements TratamientoPedido
{

    private PedidoPeligroso $pedidoPeligroso;

    public function __construct(PedidoPeligroso $pedidoPeligroso)
    {
        $this->pedidoPeligroso = $pedidoPeligroso;
    }

    public function tratar(): bool
    {
        return true;
    }
}