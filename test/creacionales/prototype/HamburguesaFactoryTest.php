<?php


use App\creacionales\prototype\Carne;
use App\creacionales\prototype\Extra;
use App\creacionales\prototype\HamburguesaFactory;
use App\creacionales\prototype\Pan;
use App\creacionales\prototype\Size;
use PHPUnit\Framework\TestCase;

class HamburguesaFactoryTest extends TestCase
{
    public function test_carta()
    {
        $royal = HamburguesaFactory::royal();

        $this->assertEquals(Carne::VACUNO, $royal->getCarne());
        $this->assertEquals(Size::GRANDE, $royal->getSize());
        $this->assertEquals(Pan::NORMAL, $royal->getPan());
        $this->assertTrue(in_array(Extra::CEBOLLA, $royal->getExtras()));
        $this->assertTrue(in_array(Extra::QUESO, $royal->getExtras()));
        $this->assertFalse(in_array(Extra::PEPINO, $royal->getExtras()));
        $this->assertFalse(in_array(Extra::MAYONESA, $royal->getExtras()));
    }

    public function test_royal_sin_cebolla()
    {
        $hamburguesaSinCebolla = (new HamburguesaFactory())
            ->from(HamburguesaFactory::royal())
            ->removeExtra(new Extra(Extra::CEBOLLA))
            ->crea();

        $this->assertEquals(Carne::VACUNO, $hamburguesaSinCebolla->getCarne());
        $this->assertEquals(Size::GRANDE, $hamburguesaSinCebolla->getSize());
        $this->assertEquals(Pan::NORMAL, $hamburguesaSinCebolla->getPan());
        $this->assertFalse(in_array(Extra::CEBOLLA, $hamburguesaSinCebolla->getExtras()));
        $this->assertTrue(in_array(Extra::QUESO, $hamburguesaSinCebolla->getExtras()));
        $this->assertFalse(in_array(Extra::PEPINO, $hamburguesaSinCebolla->getExtras()));
        $this->assertFalse(in_array(Extra::MAYONESA, $hamburguesaSinCebolla->getExtras()));
    }
}
