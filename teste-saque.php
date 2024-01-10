<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente,Titular,ContaPoupanca,SaldoInsuficienteException};
use Alura\Banco\Modelo\{CPF,Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('417.222.222-22'),
        'Alessandro',
        new Endereco('São Paulo', 'SP', 'Jardim Umarizal', 'Rua 1', '1', 'BL 1 AP 1')
    )
);

/*
$conta = new ContaPoupanca(
    new Titular(
        new CPF('417.222.222-22'),
        'Alessandro',
        new Endereco('São Paulo', 'SP', 'Jardim Umarizal', 'Rua 1', '1', 'BL 1 AP 1')
    )
);*/


$conta->depositar(500);
try{
$conta->sacar(600);
}catch (SaldoInsuficienteException $exception){
    echo "Você não tem saldo para realizar o saque";
    echo $exception->getMessage();
}
echo $conta->recuperarSaldo();