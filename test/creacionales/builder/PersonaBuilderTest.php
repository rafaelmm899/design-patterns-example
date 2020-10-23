<?php


use App\creacionales\Builder\Persona;
use App\creacionales\Builder\PersonaBuilder;
use PHPUnit\Framework\TestCase;

class PersonaBuilderTest extends TestCase
{
    public function test_persona_mayor()
    {
        $persona = (new PersonaBuilder("maria"))
            ->setMunicipio("Selva")
            ->setMayor(37)
            ->setLugarTrabajo("Google")
            ->builder();

        $this->assertInstanceOf(Persona::class,$persona);
    }

    public function test_persona_menor()
    {
        $persona = (new PersonaBuilder("pedro"))
            ->setMenor(4)
            ->setColegio("Colegio de la selva")
            ->builder();

        $this->assertInstanceOf(Persona::class,$persona);
    }
}
