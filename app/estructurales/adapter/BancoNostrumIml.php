<?php


namespace App\estructurales\adapter;


class BancoNostrumIml implements BancoNostrum
{
    public array $baseDatosClientes = [];

    public function movimiento(string $cliente, int $cantidad): void
    {
        $estadoActual = $this->estado($cliente);
        if ($estadoActual === null){
            $estadoActual = 0;
        }
        $this->baseDatosClientes[$cliente] = $estadoActual + $cantidad;
    }

    public function estado(string $cliente): ?int
    {
        return $this->baseDatosClientes[$cliente] ?? null;
    }
}