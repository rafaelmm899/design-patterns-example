<?php


namespace App\estructurales\adapter;


interface InternationalMoneyOrganization
{
    public function transfer(int $cantidad, string $cliente): void;

    public function state(string $cliente): int;
}