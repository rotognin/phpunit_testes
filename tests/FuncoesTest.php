<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Funcoes;
use App\Textos;

class FuncoesTest extends TestCase
{
    public function testPorcentagem()
    {
        $valor = new Funcoes();
        $this->assertEquals(50, $valor->porcentagem(100, 50), 'Erro no cálculo da porcentagem!');
        $this->assertIsFloat($valor->porcentagem(100, 50), 'O retorno nao é float!');
    }

    public function testAreaRetangulo()
    {
        $retangulo = new Funcoes();
        $this->assertIsFloat($retangulo->areaRetangulo(12.6, 20.005));
    }

    public function testInverter()
    {
        $texto = new Textos();
        $this->assertEquals('ogirdoR', $texto->inverter('Rodrigo'), 'Não inverteu a string!');
        $this->assertEquals('55 88 5  2 1  1', $texto->inverter('1  1 2  5 88 55'), 'Não inverteu a string');
    }
}
