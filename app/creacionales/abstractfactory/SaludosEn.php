<?php


namespace App\creacionales\abstractfactory;


class SaludosEn implements Saludos
{

    public function buenosDias(): string
    {
        return "good morning";
    }

    public function buenasTardes(): string
    {
        return "good afternoon";
    }
}