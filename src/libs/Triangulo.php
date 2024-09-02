<?php
//PEDIR INFOS PARA USUARIO E DEPOIS RODAR OS TESTES
//PRECISA VALIDAR SE É UM TRIANGULO VALIDO

class Triangulo {
    public function testaTipo (int $ladoA, int $ladoB, int $ladoC) : string 
    {
        if (
            $ladoA == $ladoB && $ladoA != $ladoC 
            || $ladoB == $ladoC && $ladoB != $ladoA 
            || $ladoC == $ladoA && $ladoC != $ladoB
            ) {
            return "ISOSCELES";
        } else if ($ladoA == $ladoB && $ladoB == $ladoC && $ladoC == $ladoA) {
            return "EQUILATERO";
        } else if ($ladoA != $ladoB && $ladoB != $ladoC && $ladoC != $ladoA) {
            return "ESCALENO";
        }
    }

    public function calculaArea (int $ladoA, int $ladoB, int $ladoC) : int  
    {
        $p = ($ladoA + $ladoB + $ladoC) / 2;
        $a = ($p-$ladoA) * ($p-$ladoB) * ($p-$ladoC);

        return $a;
    }
}