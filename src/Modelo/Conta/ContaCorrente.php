<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        // TODO: Implement percentualTarifa() method.
        return 0.05;
    }
}