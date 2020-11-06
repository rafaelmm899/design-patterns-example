<?php


namespace App\estructurales\proxy;


interface Cuenta
{
    public function getCLiente(): string;

    public function getCantidad(): int;

    public function movimiento(int $importe): void;
}