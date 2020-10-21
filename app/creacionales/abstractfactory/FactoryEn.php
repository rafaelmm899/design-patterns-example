<?php


namespace App\creacionales\abstractfactory;


class FactoryEn implements Abstractfactory
{

    public function crearPregunta(): Preguntas
    {
        return new PreguntasEn();
    }

    public function crearSaludo(): Saludos
    {
        return new SaludosEn();
    }
}