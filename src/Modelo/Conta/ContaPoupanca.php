<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        // TODO: Implement percentualTarifa() method.
        return 0.03;
    }
}