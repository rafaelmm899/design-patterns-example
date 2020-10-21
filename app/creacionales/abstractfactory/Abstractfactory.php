<?php


namespace App\creacionales\abstractfactory;


interface Abstractfactory
{
    public function crearPregunta(): Preguntas;

    public function crearSaludo(): Saludos;
}