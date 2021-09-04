<?php

/**
 * Testes específicos para a estrutura do projeto:
 * - Se os arquivos necessários existem
 * - Se alguns aquivos que não devem ir para produção estão no projeto
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{
    /**
     * @dataProvider dpTestExiste
     */
    public function testExiste(string $arquivo)
    {
        $this->assertTrue(file_exists($arquivo), 'Faltando arquivo ' . $arquivo . ' no projeto!');
    }

    /**
     * Arquivos necessários para o projeto rodar (por exemplo...)
     * Se estiver faltando algum arquivo, o teste falhará
     */
    public function dpTestExiste()
    {
        return array(
            array('.gitignore'), 
            array('composer.json'),
            array('testar.bat'),
            array('App/Funcoes.php')
            //array('existe.nao') // esse não existe... Faz o teste falhar
        );
    }

    /**
     * @dataProvider dpTestNaoExiste
     */
    public function testNaoExiste(string $arquivo)
    {
        $this->expectError(); // "expectException" marcada como obsoleta
        include $arquivo;
    }

    /**
     * Provedor dos arquivos que não devem existir no projeto em Produção
     */
    public function dpTestNaoExiste()
    {
        return array(
            array('config_dev.php'),
            array('App/Config/database_dev.php')
        );
    }

}