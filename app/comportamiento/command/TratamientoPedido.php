<?php


namespace App\comportamiento\command;


interface TratamientoPedido
{
    public function tratar(): bool;
}