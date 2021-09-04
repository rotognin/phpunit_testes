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
}