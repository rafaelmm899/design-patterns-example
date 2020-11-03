<?php


namespace App\estructurales\decorator;


interface BaseDatos
{
    public function inserta(string $registro): void;

    public function registros(): array;
}