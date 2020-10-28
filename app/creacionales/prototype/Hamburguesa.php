<?php


namespace App\creacionales\prototype;


class Hamburguesa
{
    private Carne $carne;
    private Size $size;
    private Pan $pan;
    private array $extras;

    public function __construct(Carne $carne, Size $size, Pan $pan, array $extras)
    {
        $this->carne = $carne;
        $this->size = $size;
        $this->pan = $pan;
        $this->extras = $extras;
    }

    public function getCarne(): Carne
    {
        return $this->carne;
    }

    public function getSize(): Size
    {
        return $this->size;
    }

    public function getPan(): Pan
    {
        return $this->pan;
    }

    public function getExtras(): array
    {
        return $this->extras;
    }
}