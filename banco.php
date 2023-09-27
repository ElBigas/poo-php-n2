<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControleDeBonificacoes;
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor};

$cpf = new Cpf('123.456.789-10');
/*$endereco = new Endereco('Londrina', 'Centro', 'JK', '1234');
$emanuel = new Titular("Emanuel", $cpf, $endereco);

$conta1 = new ContaPoupanca($emanuel);
$conta2 = new ContaCorrente($emanuel);


$conta1->depositar(100);
$conta1->sacar(10);
$conta1->getSaldo();

$conta2->depositar(100);
$conta2->sacar(10);
$conta2->getSaldo();*/

$funcionario1 = new Gerente('Emanuel', $cpf, 'Estagiario', 1000);
$funcionario2 = new Desenvolvedor('Manoel', $cpf, 'Desenvolvedor', 1350);
$funcionario3 = new Diretor('Maria Eduarda', $cpf, 'Diretor', 5000);

$controlador = new ControleDeBonificacoes();
$controlador->adicionaBonificacoes($funcionario1);
$controlador->adicionaBonificacoes($funcionario2);
$controlador->adicionaBonificacoes($funcionario3);

echo $controlador->getTotal();