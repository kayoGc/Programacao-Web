<?php
include_once 'pessoa.php';
include_once 'conta.php';

// Criação do objeto

$carlos = new Pessoa(10, "Carlos da Silva", 1.5, 25, '10/04/1976', "Ensino Médio", 1000);

echo "Manipulando o objeto $carlos->nome : \n <br><br>";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n <br>";

$carlos->formar('Técnico em Programa');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n <br>";
echo "{$carlos->nome} possui {$carlos->escolaridade} \n <br>";
echo "{$carlos->nome} possui {$carlos->idade} anos \n <br>";

$carlos->envelhecer(1);
echo "{$carlos->nome} possui {$carlos->idade} anos \n <br>";

$conta_carlos = new conta(6677, "CC.12.34. 56", "10/07/02", $carlos, 9876, 567.89);
// $conta_carlos->cancelada = false;

echo "<br>";
echo "Manipulando a conta de: {$conta_carlos->titular->nome} <br>";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";
