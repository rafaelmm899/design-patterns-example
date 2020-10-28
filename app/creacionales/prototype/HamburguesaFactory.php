<?php


namespace App\creacionales\prototype;


class HamburguesaFactory
{
    private Carne $carne;
    private Size $size;
    private Pan $pan;
    private array $extras;

    public function crea(): Hamburguesa
    {
        return new Hamburguesa($this->carne, $this->size, $this->pan, $this->extras);
    }

    public function setCarne(Carne $carne): self
    {
        $this->carne = $carne;
        return $this;
    }

    public function setSize(Size $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function setPan(Pan $pan): self
    {
        $this->pan = $pan;
        return $this;
    }

    public function addExtra(Extra $extras): self
    {
        $this->extras[] = $extras;
        return $this;
    }

    public function removeExtra(Extra $extra):self
    {
        if (($key = array_search($extra, $this->extras)) !== false) {
            unset($this->extras[$key]);
        }

        return $this;
    }

    public static function royal():Hamburguesa
    {
        return new Hamburguesa(
            new Carne(Carne::VACUNO),
            new Size(Size::GRANDE),
            new Pan(Pan::NORMAL),
            [
                new Extra(Extra::CEBOLLA),
                new Extra(Extra::QUESO),
            ]
        );
    }

    public static function king():Hamburguesa
    {
        return new Hamburguesa(
            new Carne(Carne::VACUNO),
            new Size(Size::EXTRA_GRANDE),
            new Pan(Pan::NORMAL),
            [
                new Extra(Extra::CEBOLLA),
                new Extra(Extra::HUEVO),
            ]
        );
    }

    public function from(Hamburguesa $royal): self
    {
        $hamburguesa = new self();
        $hamburguesa->setCarne(new Carne(Carne::VACUNO));
        $hamburguesa->setSize(new Size(Size::GRANDE));
        $hamburguesa->setPan(new Pan(Pan::NORMAL));
        $hamburguesa->addExtra(new Extra(Extra::CEBOLLA));
        $hamburguesa->addExtra(new Extra(Extra::QUESO));
        return $hamburguesa;
    }
}