<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel
{
    private string $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->categoria));
    }

    public function getPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
