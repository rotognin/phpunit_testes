<?php

namespace App;

class Textos
{
    public function inverter(string $texto)
    {
        $iCnt = 0;
        $invertido = '';
        $iPos = 0;

        for ($iCnt = strlen($texto) - 1; $iCnt >= 0; $iCnt--)
        {
            $invertido[$iPos] = $texto[$iCnt];
            $iPos++;
        }

        return $invertido;
    }

    public function contarLetra(string $letra, string $texto)
    {
        $iCnt = 0;
        $iQtd = 0;

        for ($iCnt = 0; $iCnt < strlen($texto); $iCnt++)
        {
            if ($texto[$iCnt] == $letra){
                $iQtd++;
            }
        }

        return $iQtd;
    }
}