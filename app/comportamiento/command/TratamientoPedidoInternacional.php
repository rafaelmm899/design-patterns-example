<?php


namespace App\comportamiento\command;


class TratamientoPedidoInternacional implements TratamientoPedido
{
    private PedidoInternacional $pedidoInternacional;

    public function __construct(PedidoInternacional $pedidoInternacional)
    {
        $this->pedidoInternacional = $pedidoInternacional;
    }

    public function tratar(): bool
    {
        return $this->pedidoInternacional->getDestino() !== "Mordor";
    }

}