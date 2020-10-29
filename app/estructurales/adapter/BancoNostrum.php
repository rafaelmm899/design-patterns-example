<?php


namespace App\estructurales\adapter;


interface BancoNostrum
{
    public function movimiento(string $cliente, int $cantidad): void;

    public function estado(string $cliente): ?int;
}