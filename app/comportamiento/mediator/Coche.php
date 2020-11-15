<?php


namespace App\comportamiento\mediator;


class Coche
{
    private SistemaMediator $sistemaMediator;

    public function enciende(): void
    {
        $this->sistemaMediator->encenderCoche();
    }

    public function apaga(): void
    {
        $this->sistemaMediator->apagarCoche();
    }

    public function setSistemaMediator(SistemaMediator $sistemaMediator): void
    {
        $this->sistemaMediator = $sistemaMediator;
    }
}