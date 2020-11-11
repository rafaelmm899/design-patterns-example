<?php


namespace App\comportamiento\command;


interface PedidoPeligroso extends Pedido
{

    public function instrucciones(): string;
}