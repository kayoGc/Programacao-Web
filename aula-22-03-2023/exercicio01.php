<?php 
	$valor = 1000.00;
	$codigo = 8;

	print("Digite 1 para aumentar 10%<br/>3 para aumentar 25%<br/>\n4 para 30%<br/>\n8 para 50%<br/>");

	switch($codigo) {
		case 1:
			$valor = $valor + $valor * 0.10;
			break;
		case 3:
			$valor = $valor + $valor * 0.25;
			break;
		case 4:
			$valor = $valor + $valor * 0.30;
			break;
		case 8:
			$valor = $valor + $valor * 0.50;
			break;
		default:
			print("Codigo invalido");
	}

	print("O novo valor é: R$$valor");
?>