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

        if (count($aData) != 3){ return false; }

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

    /**
     * Calcular a quantidade de horas e minutos dentro de um mesmo dia
     * Existem funções que fazem isso automaticamente, mas só estou fazendo
     * de forma manual para esse projeto de testes unitários.
     */
    public function quantoTempo(float $horaInicio, float $horaFim)
    {
        $tempo = 0.00;

        if ($horaInicio >= $horaFim){
            return $tempo;
        }

        $hrI = floor($horaInicio);
        $mnI = $horaInicio = $hrI;

        if ($hrI > 23 || $mnI > 59) {
            return $tempo;
        }

        $hrF = floor($horaFim);
        $mnF = $horaFim = $hrF;

        if ($hrF > 23 || $mnF > 59) {
            return $tempo;
        }

        $hrImn = $hrI * 60; // Transforma as horas em minutos
        $hrFmn = $hrF * 60;

        // Faltando implementar o resto da função....

        return $tempo;
    }
}