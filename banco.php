<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControleDeBonificacoes;
use Alura\Banco\Modelo\Conta\{ContaCorrente,
    ContaPoupanca,
    SaldoInsuficienteException,
    Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor};
use http\Exception\InvalidArgumentException;

$cpf = new Cpf('123.456.789-10');
$endereco = new Endereco('Londrina', 'Centro', 'JK', '1234');
$emanuel = new Titular("Emanuel", $cpf, $endereco);

$conta1 = new ContaPoupanca($emanuel);
$conta2 = new ContaCorrente($emanuel);

try {
    $conta1->depositar(-100);
} catch (InvalidArgumentException $exception){
    echo "Valor precisa ser positivo";
}
