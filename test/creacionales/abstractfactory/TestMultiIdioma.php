<?php


use App\creacionales\abstractfactory\FactoryEn;
use App\creacionales\abstractfactory\FactoryES;
use App\creacionales\abstractfactory\PreguntasEn;
use App\creacionales\abstractfactory\PreguntasEs;
use App\creacionales\abstractfactory\SaludosEn;
use App\creacionales\abstractfactory\SaludosEs;
use PHPUnit\Framework\TestCase;

class TestMultiIdioma extends TestCase
{
    public function test_es()
    {
        $factory = new FactoryES();

        $preguntas = $factory->crearPregunta();

        $this->assertEquals("¿qué hora es?", $preguntas->preguntaHora());
        $this->assertEquals("¿qué tiempo hace?", $preguntas->preguntaTiempo());

        $saludos = $factory->crearSaludo();
        $this->assertEquals("buenos días", $saludos->buenosDias());
        $this->assertEquals("buenas tardes", $saludos->buenasTardes());
    }

    public function test_en()
    {
        $factory = new FactoryEn();

        $preguntas = $factory->crearPregunta();

        $this->assertEquals("what time is it?", $preguntas->preguntaHora());
        $this->assertEquals("how is the weather?", $preguntas->preguntaTiempo());

        $saludos = $factory->crearSaludo();
        $this->assertEquals("good morning", $saludos->buenosDias());
        $this->assertEquals("good afternoon", $saludos->buenasTardes());
    }
}
