<?php

namespace Alura\Banco\Modelo\Conta;

/*
 * Exception personalizada criada para este sistema
 * */

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $message = "Você tentou sacar R$$valorSaque, mas seu saldo é R$$saldoAtual";
        parent::__construct($message);
    }
}