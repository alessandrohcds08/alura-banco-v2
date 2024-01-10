<?php


namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valot, Conta $contaDestino): void
    {
        if ($valot > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valot);
        $contaDestino->depositar($valot);
    }
}