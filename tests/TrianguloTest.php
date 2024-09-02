<?php
use PHPUnit\Framework\TestCase;
include "src/libs/Triangulo.php";

class TrianguloTest extends TestCase
{
    public function testTrianguloIsosceles ()
    {
        $trianguloIsosceles = new Triangulo();
        $ladoA = 10;
        $ladoB = 20;
        $ladoC = 10;

        $result = $trianguloIsosceles->testaTipo($ladoA, $ladoB, $ladoC);

        $this->assertEquals($result, "ISOSCELES");
    }

    public function testTrianguloEquilatero () 
    {
        $trianguloEquilatero = new Triangulo();
        $ladoAEquilatero = 10;
        $ladoBEquilatero = 10;
        $ladoCEquilatero = 10;

        $this->assertEquals($trianguloEquilatero->
        testaTipo($ladoAEquilatero, $ladoBEquilatero, $ladoCEquilatero), "EQUILATERO");
    }

    public function testTrianguloEscaleno ()
    {
        $trianguloEscaleno = new Triangulo();
        $ladoA = 10;
        $ladoB = 5;
        $ladoC = 1;

        $this->assertEquals($trianguloEscaleno->testaTipo($ladoA, $ladoB, $ladoC), "ESCALENO");
    }

    public function testCalculoArea () 
    {
        $calculaArea = new Triangulo();
        $ladoA = 10;
        $ladoB = 10;
        $ladoC = 10;

        $this->assertEquals($calculaArea->calculaArea($ladoA, $ladoB, $ladoC), 125);
    }
}