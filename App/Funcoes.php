<?php

namespace App;

class Funcoes
{
    public function porcentagem(float $valor, float $porcento)
    {
        return ($valor / 100) * $porcento;
    }

    public function areaRetangulo(float $lado, float $altura)
    {
        return $lado * $altura;
    }

    public function validarData(string $data)
    {
        $aData = explode('/', $data);
        $dia = (int)$aData[0];
        $mes = (int)$aData[1];
        $ano = (int)$aData[2];

        if ($dia == 0 || $mes == 0 || $ano == 0){
            return false;
        }

        if ($ano < 1900 || $ano > 2050) { return false; }
        if ($mes > 12) { return false; }
        if ($dia > 31) { return false; }

        $aMes30 = array('04', '06', '09', '11');

        if ($mes == 2) {
            $resto = $ano % 4;
            if ($resto > 0){
                if ($dia > 28) { return false; }
            } else {
                if ($dia > 29) { return false; }
            }
        }

        if (in_array($mes, $aMes30)){
            if ($dia > 30){
                return false;
            }
        }

        return true;
    }
}