<?php


namespace App\estructurales\facade;


use MyCLabs\Enum\Enum;

class Tipo extends Enum
{
    public const BASICA = 'basica';
    public const PREMIUM = 'premium';
    public const VIP = 'vip';
}