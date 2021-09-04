<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Funcoes;

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
            array('04/09/2021', true),  // OK
            array('32/05/2021', false), // Dia inválido
            array('1234567890', false), // Valor inválido
            array('aa/aa/aaaa', false), // Valor inválido
            array('29/02/2021', false), // Não tem 29 em Fevereiro de 2021
            array('01/13/2020', false)  // Não existe mês 13
        );
    }
}
