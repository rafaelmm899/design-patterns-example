<?php


namespace App\estructurales\facade;


class PreferenciasComunicacion
{
    private bool $emailDiaro;
    private bool $emailSemanal;
    private bool $emailHtml;

    public function __construct(bool $emailDiaro, bool $emailSemanal, bool $emailHtml)
    {
        $this->emailDiaro = $emailDiaro;
        $this->emailSemanal = $emailSemanal;
        $this->emailHtml = $emailHtml;
    }

    public function isEmailDiario(): bool
    {
        return $this->emailDiaro;
    }

    public function isEmailSemanal(): bool
    {
        return $this->emailSemanal;
    }

    public function isEmailHtml(): bool
    {
        return $this->emailHtml;
    }
}