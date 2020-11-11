<?php


namespace App\comportamiento\command;


class PedidoInternacional implements Pedido
{
    private string $destino;
    private int $peso;

    public function __construct(string $destino, int $peso)
    {
        $this->destino = $destino;
        $this->peso = $peso;
    }

    public function peso(): int
    {
        return $this->peso;
    }

    public function getDestino(): string
    {
        return $this->destino;
    }
}