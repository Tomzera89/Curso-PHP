<?php

/*Crie uma enum em PHP com tipos de contas bancárias e implemente um método informando
 se a conta possui taxas. Contas correntes e de investimento possuem taxas,
  enquanto contas poupança e universitárias não;*/

enum TipoConta
{
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxa(): bool
    {
        return match($this) {
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria=> false,
        };
    }
}

/*Crie uma classe que represente uma conta com as propriedades saldo, nome do titular e tipo.
Use os tipos e formas de acesso adequadas.*/
class Conta
{
    private int $saldo;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly TipoConta $tipo,
    ) {
        $this->saldo = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        if ($valorADepositar > 0) {
            $this->saldo += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar <= $this->saldo) {
            $this->saldo -= $valorASacar;
        }
    }


}