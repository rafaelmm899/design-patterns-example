<?php


namespace App\estructurales\facade;


class BBDD
{
    private static ?BBDD $instance = null;

    private array $emails = [];
    private array $tarjetas = [];
    private array $preferencias = [];

    public static function getInstance(): BBDD
    {
        if (static::$instance === null) {
            var_dump("se creo instancia");
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function clear(): void
    {
        $this->emails = [];
        $this->tarjetas = [];
        $this->preferencias = [];
    }

    public function getEmail(string $cliente)
    {
        return $this->emails[$cliente];
    }

    public function setEmail(string $cliente, string $email): void
    {
        $this->emails[$cliente] = $email;
    }

    public function getTarjeta(string $cliente): Tipo
    {

        return $this->tarjetas[$cliente];
    }

    public function addTarjetas(string $cliente, Tipo $tipo): void
    {
        $this->tarjetas[$cliente] = $tipo;
    }

    public function getPreferencias(string $cliente): PreferenciasComunicacion
    {
        return $this->preferencias[$cliente];
    }

    public function setPreferencias(string $cliente, PreferenciasComunicacion $preferencia): void
    {
        $this->preferencias[$cliente] = $preferencia;
    }
}