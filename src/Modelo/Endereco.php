<?php

namespace Alura\Banco\Modelo;

/**
 * @property-read $bairro
 * @property-read $rua
 * @property-read $cidade
 * @property-read $numero
 */

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    //com este metodo magico podemos representar qualquer objeto como string
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    //com este metodo podemos acessar metodos que não existem ou são privados
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $nomeAtributo, $value): void
    {
        $this->$nomeAtributo = $value;
    }

}