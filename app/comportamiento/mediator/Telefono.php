<?php


namespace App\comportamiento\mediator;


class Telefono
{
    public bool $musicOn = false;
    private SistemaMediator $sistemaMediator;

    public function recibeLlamada(): void
    {
        $this->musicOn = false;
        $this->sistemaMediator->recibeLlamada();
    }

    public function enciendeMusica(): void
    {
        $this->musicOn = true;
    }

    public function apagaMusica(): void
    {
        $this->musicOn = false;
    }

    public function musicaEncendida(): bool
    {
        return $this->musicOn;
    }

    public function setSistemaMediator(SistemaMediator $sistemaMediator): void
    {
        $this->sistemaMediator = $sistemaMediator;
    }
}