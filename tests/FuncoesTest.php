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

    /**
     * @dataProvider dpTestAreaRetangulo
     */
    public function testAreaRetangulo($lado, $altura, $esperado)
    {
        $retangulo = new Funcoes();
        $this->assertEquals($esperado, $retangulo->areaRetangulo($lado, $altura));
    }

    /**
     * Provedor de dados para os testes da área do retângulo
     * Iniciando o nome da função com "dp" = "Data Provider"
     */
    public function dpTestAreaRetangulo()
    {
        return array(
            array(10, 2, 20),
            array(12.2, 2, 24.4)
        );
    }

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

    /**
     * @dataProvider dpTestValidarData
     */
    public function testValidarData(string $data, bool $valida)
    {
        $obj = new Funcoes();
        $this->assertEquals($valida, $obj->validarData($data), 'Erro ao validar a data');
    }

    public function dpTestValidarData()
    {
        return array(
            array('10/05/2021', true),
            array('32/05/2021', false)
        );
    }
}
