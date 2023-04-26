<?php 
	print("Digite o valor do raio da lata de óleo: ");
	$r2 = 5.0;
	print("$r2 <br/>");
	print("Digite a altura da lata em cm: ");
	$altura = 3.2;
	print($altura . "cm <br/>");	
	$pi = 3.14159;

	$volume = $pi * $r2 * $altura;
	printf("O volume da lata é: %.2f", $volume);
?>