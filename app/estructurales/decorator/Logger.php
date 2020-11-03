<?php


namespace App\estructurales\decorator;


class Logger
{
    private array $log = [];

    public function add(string $message): void
    {
        $this->log[] = $message;
    }

    public function obtener(): array
    {
        return $this->log;
    }
}