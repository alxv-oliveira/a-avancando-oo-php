<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcioario)
    {
        $this->totalBonificacoes += $funcioario->calculaBonificacao();
    }

    public function getTotalBonificacoes(): float 
    {
        return $this->totalBonificacoes;
    }
}