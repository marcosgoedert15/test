<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorSaque) 
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito)
    {
        if ($valorDeposito > 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function transferir(float $valorTransferido, Conta $contaDestino): void
    {
        if ($valorTransferido > $this->valorTransferido) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorTransferido);
        $contaDestino->depositar($valorTransferido);
    }
}