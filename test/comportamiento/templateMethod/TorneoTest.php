<?php


use App\comportamiento\templateMethod\InscripcionLucha;
use App\comportamiento\templateMethod\InscripcionTenis;
use App\comportamiento\templateMethod\Polideportivo;
use App\comportamiento\templateMethod\Solicitud;
use App\comportamiento\templateMethod\Torneo;
use PHPUnit\Framework\TestCase;

class TorneoTest extends TestCase
{
    private Solicitud $solicitud_edad_9;
    private Solicitud $solicitud_edad_15_ligero;
    private Solicitud $solicitud_edad_15_pesado;

    private Polideportivo $polideportivo;
    private InscripcionLucha $lucha;
	private InscripcionTenis $tenis;

    protected function setUp(): void
    {
        $this->solicitud_edad_9 = new Solicitud("sol 10", 9, 40);
        $this->solicitud_edad_15_ligero = new Solicitud("sol 15 ligero", 15, 40);
        $this->solicitud_edad_15_pesado = new Solicitud("sol 15 pesado", 15, 70);

        $this->polideportivo = new Polideportivo();
        $this->lucha = new InscripcionLucha($this->polideportivo);
        $this->tenis = new InscripcionTenis($this->polideportivo);
    }

    public function test_torneo_tenis_acceptados()
    {
        $this->assertFalse($this->tenis->apunta($this->solicitud_edad_9),"con edad 9 no puede apuntarse");
        $this->assertTrue($this->tenis->apunta($this->solicitud_edad_15_ligero), "con edad 15 si puede apuntarse");
        $this->assertTrue($this->tenis->apunta($this->solicitud_edad_15_pesado), "con edad 15 si puede apuntarse");
        $this->assertEquals(2, count($this->tenis->getTorneo()->getAceptadas()),"dos aceptados");
    }

    public function test_torneo_lucha_acceptados()
    {
        $this->assertFalse($this->lucha->apunta($this->solicitud_edad_9),"con edad 9 no puede apuntarse");
        $this->assertFalse($this->lucha->apunta($this->solicitud_edad_15_ligero), "con edad 15 pero ligero puede apuntarse");
        $this->assertTrue($this->lucha->apunta($this->solicitud_edad_15_pesado), "con edad 15 y peso adecuado puede apuntarse");
        $this->assertEquals(1, count($this->lucha->getTorneo()->getAceptadas()),"un aceptado");
    }

    public function test_torneo_tenis_limite()
    {
        for ($i = 0; $i < 4; $i++){
            $this->assertTrue($this->tenis->apunta(new Solicitud("participante " . 1, 15, 60)),"apuntado participante " . ($i+1));
        }

        $this->assertFalse($this->tenis->apunta($this->solicitud_edad_15_ligero), "Ya hay 4 apuntados");

        $horasRservadas = $this->polideportivo->getReservas()[$this->tenis->getTorneo()->getNombre()];

        $this->assertNotNull($horasRservadas,"hay reserva hecha");
        $this->assertEquals( 8, (int) $horasRservadas,"la reserva es de 8 horas");
    }

    public function test_torneo_lucha_limite()
    {
        for ($i = 0; $i < 6; $i++){
            $this->assertTrue($this->lucha->apunta(new Solicitud("participante " . 1, 15, 70)),"apuntado participante " . ($i+1));
        }

        $this->assertFalse($this->lucha->apunta($this->solicitud_edad_15_ligero), "Ya hay 6 apuntados");

        $horasRservadas = $this->polideportivo->getReservas()[$this->lucha->getTorneo()->getNombre()];

        $this->assertNotNull($horasRservadas,"hay reserva hecha");
        $this->assertEquals( 4, (int) $horasRservadas,"la reserva es de 4 horas");
    }
}
