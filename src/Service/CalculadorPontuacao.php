<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;

class CalculadorPontuacao
{
    public function setPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->setPontuacao();
    }
}
