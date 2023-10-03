<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        //irá passar o nome e o cpf para a classe pai, não é obrigatório no PHP, mas é sempre bom fazer isso
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}