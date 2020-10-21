<?php


namespace App\creacionales\abstractfactory;


class PreguntasEs implements Preguntas
{

    public function preguntaHora(): string
    {
        return "¿qué hora es?";
    }

    public function preguntaTiempo(): string
    {
        return "¿qué tiempo hace?";
    }
}