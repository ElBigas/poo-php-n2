<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        //irá passar o nome e o cpf para a classe pai
        //não é obrigatório no PHP, mas é sempre bom fazer isso
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validarNomeTitlular($nome);
        $this->nome = $nome;
    }

}