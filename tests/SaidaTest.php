<?php

/**
 * Testando saídas para a tela, quando utilizado "echo ..."
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Saidas;

class SaidaTest extends TestCase
{
    public function testAlerta()
    {
        $this->expectOutputString('String com acentuação');

        $obj = new Saidas();
        $obj->alerta('String com acentuação');
    }

    /**
     * @dataProvider dpTestItalico
     */
    public function testItalico(string $texto, string $esperado)
    {
        $this->expectOutputString($esperado);
        
        $obj = new Saidas();
        echo $obj->italico($texto);
    }

    public function dpTestItalico()
    {
        return array(
            array('Rodrigo Tognin', '<i>Rodrigo Tognin</i>'), // texto normal
            array(' Teste ', '<i> Teste </i>'),                // espaços antes e depois
            array('', '')                                      // não deve aplicar a tag de itálico
        );
    }

    /**
     * Teste incompleto, deixar essa marcação para quando o teste
     * for criado, mas a implementação dele ainda não foi realizada
     */
    public function testNegrito()
    {
        /*
        $obj = new Saidas();
        $this->assertEquals('<b>Rodrigo</b>', $obj->negrito('Rodrigo'), 'Falha ao aplicar a tag <b>');
        */

        $this->markTestIncomplete('A implementação de Saidas::negrito ainda não foi feita.');
    }
}