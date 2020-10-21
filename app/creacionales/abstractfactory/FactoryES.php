<?php


namespace App\creacionales\abstractfactory;


class FactoryES implements Abstractfactory
{

    public function crearPregunta(): Preguntas
    {
        return new PreguntasEs();
    }

    public function crearSaludo(): Saludos
    {
        return new SaludosEs();
    }
}