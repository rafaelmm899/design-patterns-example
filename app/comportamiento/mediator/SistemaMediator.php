<?php

namespace App\comportamiento\mediator;

class SistemaMediator
{
    private Coche $coche;
    private Radio $radio;
    private Telefono $telefono;

    /**
     * SistemaMediator constructor.
     * @param Coche $coche
     * @param Radio $radio
     * @param Telefono $telefono
     */
    public function __construct(Coche $coche, Radio $radio, Telefono $telefono)
    {
        $this->coche = $coche;
        $this->radio = $radio;
        $this->telefono = $telefono;
        $this->coche->setSistemaMediator($this);
        $this->radio->setSistemaMediator($this);
        $this->telefono->setSistemaMediator($this);
    }


    public function encenderCoche()
    {
        $this->radio->enciende();
        $this->telefono->apagaMusica();
    }

    public function recibeLlamada()
    {
        $this->radio->apaga();
    }

    public function encenderRadio()
    {
        $this->telefono->apagaMusica();
    }

    public function apagarRadio()
    {

    }

    public function apagarCoche()
    {
        $this->radio->apaga();
    }
}