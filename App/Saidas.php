<?php

namespace App;

class Saidas
{
    public function alerta(string $mensagem)
    {
        echo $mensagem;
    }

    public function italico(string $texto)
    {
        $retorno = '';

        if (!empty($texto)) {
            $retorno = '<i>' . $texto . '</i>';
        }

        return $retorno;
    }

}