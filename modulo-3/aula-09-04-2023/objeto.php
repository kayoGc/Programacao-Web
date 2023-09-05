<?php
include_once 'pessoa.php';
include_once 'conta.php';

// Criação do objeto

$carlos = new Pessoa;
$carlos->codigo = 10;
$carlos->nome = "Carlos da Silva";
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->nome : \n <br><br>";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n <br>";

$carlos->formar('Técnico em Programa');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n <br>";
echo "{$carlos->nome} possui {$carlos->escolaridade} \n <br>";
echo "{$carlos->nome} possui {$carlos->idade} anos \n <br>";

$carlos->envelhecer(1);
echo "{$carlos->nome} possui {$carlos->idade} anos \n <br>";

$conta_carlos = new conta;
$conta_carlos->agencia = 6677;
$conta_carlos->codigo = "CC.12.34. 56";
$conta_carlos->dataDeCriacao = "10/07/02";
$conta_carlos->titular = $carlos;
$conta_carlos->senha = 9876;
$conta_carlos->saldo = 567.89;
$conta_carlos->cancelada = false;

echo "<br>";
echo "Manipulando a conta de: {$conta_carlos->titular->nome} <br>";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";
