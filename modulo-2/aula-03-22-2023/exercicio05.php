<?php 
	$valorAula = 50;
	$aulasDadas = 5;
	$descontoInss = 10;
	$salarioBruto = $valorAula * $aulasDadas;
	$salarioLiquido = $salarioBruto - $salarioBruto * ($descontoInss / 100);

	print("Seu salário liquido é: R$$salarioLiquido");

 ?>