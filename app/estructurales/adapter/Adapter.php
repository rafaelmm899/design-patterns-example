<?php


namespace App\estructurales\adapter;


class Adapter implements InternationalMoneyOrganization
{
    private BancoNostrum $bancoNostrum;

    public function __construct(BancoNostrum $bancoNostrum)
    {
        $this->bancoNostrum = $bancoNostrum;
    }

    public function transfer(int $cantidad, string $cliente): void
    {
        $this->bancoNostrum->movimiento($cliente, $cantidad);
    }

    public function state(string $cliente): int
    {
        $estado = $this->bancoNostrum->estado($cliente);

        return $estado ?? 0;
    }


}