<?php


namespace App\creacionales\abstractfactory;


class SaludosEs implements Saludos
{
    public function buenosDias(): string
    {
        return "buenos días";
    }

    public function buenasTardes(): string
    {
        return "buenas tardes";
    }

}