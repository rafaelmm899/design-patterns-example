<?php


namespace App\comportamiento\mediator;


class Radio
{
    private SistemaMediator $sistemaMediator;
    public bool $enciende = false;

    public function enciende(): void
    {
        $this->enciende = true;
        $this->sistemaMediator->encenderRadio();
    }

    public function apaga():void
    {
        $this->enciende = false;
        $this->sistemaMediator->apagarRadio();
    }

    public function encendida():bool
    {
        return $this->enciende;
    }

    public function setSistemaMediator(SistemaMediator $sistemaMediator): void
    {
        $this->sistemaMediator = $sistemaMediator;
    }
}