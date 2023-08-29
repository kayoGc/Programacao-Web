<?php

include_once 'conta.php';
include_once 'carros.php';

// Instanciando
$conta = new Contas();
$carro = new Carro();

// Colocando variaveis
$conta->NumAge = 25;
$conta->NumConta = "1";
$conta->Nome = "Etevaldo";
$conta->Saldo = 80.23;

$carro->Cor = "Azul";
$carro->Ano = 2005;
$carro->NumeroPortas = 10;
$carro->Peso = 1.5;
$carro->Velocidade = 1;

// usando metodos
$conta->ExibeDados();
$carro->InformarCar();
