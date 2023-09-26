<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    //quando uma nova instância for criada, será iniciado este método mágico
    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++; //sempre que uma nova instancia for criada é incrementado em 1 a variavel
    }

    //quando uma nova instância for destruida, será executado este método mágico
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void {

        $tafiraDeSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tafiraDeSaque;

        if($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void {
        if (@$valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDeDestino) : void {

        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDeDestino->depositar($valorATransferir);
    }

    //Métodos getters
    public function getSaldo()
    {
        echo "Seu saldo é: ", $this->saldo ," reais" . PHP_EOL;
    }

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular() : string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas () : int //método estático para recuperar o atributo estático da classe
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa() : float;


}

/* esta classe é a classe genérica de conta corrente e conta poupança,
 * ela é abstrata por conta disto, não é possível
 * criar uma conta no banco, é necessário que se escolha o tipo da conta
 * quando uma classe é abstrata não é possível instanciar um objeto a
 * partir desta classe, somente a partir das classes filhas
 * */
