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
}