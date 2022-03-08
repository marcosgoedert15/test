<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorSaque): void
    {
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito): void
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