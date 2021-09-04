<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{
    /**
     * @dataProvider dpTestInsert
     */
    public function testInsert(string $arquivo)
    {
        $this->assertTrue(file_exists($arquivo), 'Faltando arquivo ' . $arquivo . ' no projeto!');
    }

    /**
     * Arquivos necessários para o projeto rodar (por exemplo...)
     * Se estiver faltando algum arquivo, o teste falhará
     */
    public function dpTestInsert()
    {
        return array(
            array('.gitignore'), 
            array('composer.json'),
            array('testar.bat'),
            array('App/Funcoes.php')
            //array('existe.nao') // esse não existe... Faz o teste falhar
        );
    }
}