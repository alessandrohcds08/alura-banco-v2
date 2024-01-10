<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

$endereco = new Endereco('Sao paulo', 'SP', 'jardim umarizal', 'rua 1', '1', 'bl 1 ap 1');
$titular = new Titular(new CPF('417.222.222-22'), 'alesandro', $endereco);
$primeiraConta = new ContaCorrente($titular);
var_dump($primeiraConta);
$primeiraConta->depositar(300);
$primeiraConta->sacar(10);
$titular1 = new Titular(new CPF('312.231.313-33'), 'talita', $endereco);
$segundaConta = new ContaCorrente($titular1);


echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo $segundaConta->recuperarCpf() . PHP_EOL;
echo $segundaConta->recuperarNome() . PHP_EOL;
var_dump($segundaConta);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpf() . PHP_EOL;
echo $primeiraConta->recuperarNome() . PHP_EOL;
/*
$titular2 = new Titular('111.111.111-11', 'conta3');
$outra = new Conta($titular2);
unset($segundaConta);9*/
echo Conta::recuperaNumeroDeContas();


$funcionario = new Desenvolvedor(new CPF('132.123.123-00'), 'rosana', 'chefe');

var_dump($funcionario);
echo $funcionario->recuperarNome() . PHP_EOL;
echo $funcionario->recuperarCpf() . PHP_EOL;