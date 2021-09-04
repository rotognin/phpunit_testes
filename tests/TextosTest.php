<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Textos;

class TextosTest extends TestCase
{
    public function testInverter()
    {
        $texto = new Textos();
        $this->assertEquals('ogirdoR', $texto->inverter('Rodrigo'), 'Não inverteu a string!');
        $this->assertEquals('55 88 5  2 1  1', $texto->inverter('1  1 2  5 88 55'), 'Não inverteu a string');
    }

    /**
     * @dataProvider dpTestContarLetra
     */
    public function testContarLetra(string $texto, string $letra, int $esperado)
    {
        $obj = new Textos();
        $this->assertEquals($esperado, $obj->contarLetra($letra, $texto), 'Errou na contagem das letras');
    }

    public function dpTestContarLetra()
    {
        return array(
            array('Rodrigo Tognin', 'o', 3),
            array('1 2 3 4 5 6 7 8 9 0 ', ' ', 10)
        );
    }
}