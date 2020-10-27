<?php


namespace App\creacionales\factoryMethod;


class LavadoraCargaFrontal extends Lavadora
{
    public function lavadoraCargaFrontal():void {
        $this->tipoCarga = "frontal";
    }
}