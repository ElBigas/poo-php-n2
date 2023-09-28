<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Cpf, Pessoa};

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        //irá passar o nome e o cpf para a classe pai
        //não é obrigatório no PHP, mas é sempre bom fazer isso
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
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

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function aumentaSalario(float $valorAumento): void
    {
        if($valorAumento < 0) {
            echo 'Valor de aumento deve ser positivo';
            return;
        }

        $this->salario += $valorAumento;
    }

    //todos os funcionarios possuem uma bonificação padrão de 10%, porem este metodo é subscrito nas classes
    //filhas diretor e gerente
    /*
    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }*/

    //agora não há mais bonificação padrão
    abstract public function calculaBonificacao(): float;
}