<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;

$cpf = new Cpf('123.456.789-10');
$endereco = new Endereco('Londrina', 'Centro', 'JK', '1234');
$emanuel = new Titular("Emanuel", $cpf, $endereco);

$conta1 = new ContaPoupanca($emanuel);
$conta2 = new ContaCorrente($emanuel);


$conta1->depositar(100);
$conta1->sacar(10);
$conta1->getSaldo();

$conta2->depositar(100);
$conta2->sacar(10);
$conta2->getSaldo();