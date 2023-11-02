<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    protected function validarNome(string $nomeTitular): void //este método é privado pois é usado somente para uma validação interna
    {
        if (strlen($nomeTitular) < 5) {
            throw new NomeInvalidoException();
        }
    }
}