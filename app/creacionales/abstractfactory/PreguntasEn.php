<?php


namespace App\creacionales\abstractfactory;


class PreguntasEn implements Preguntas
{
    public function preguntaHora(): string
    {
        return "what time is it?";
    }

    public function preguntaTiempo(): string
    {
        return "how is the weather?";
    }
}