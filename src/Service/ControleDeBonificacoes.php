<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControleDeBonificacoes
{
    private float $totalBonificacoes = 0;
    public function adicionaBonificacoes(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function getTotal() : float
    {
        return $this->totalBonificacoes;
    }
}