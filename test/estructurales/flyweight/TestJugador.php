<?php


use App\estructurales\flyweight\Jugador1;
use App\estructurales\flyweight\Jugador2;
use App\estructurales\flyweight\Jugador3;
use PHPUnit\Framework\TestCase;

class TestJugador extends TestCase
{
    public function test_jugador()
    {
        $this->assertEquals("\n\n------ jugador 1 -----\n\n", (new Jugador1())->dibuja());
        $this->assertEquals("\n\n------ jugador 2 -----\n\n", (new Jugador2())->dibuja());
        $this->assertEquals("\n\n------ jugador 3 -----\n\n", (new Jugador3())->dibuja());
    }
}
