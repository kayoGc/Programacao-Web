<?php 
	$horaTrabalhada = 7;
	$salarioHora = 8.50;
	$numeroDependentes = 1; 

	$salarioBruto = $horaTrabalhada * $salarioHora + (50 * $numeroDependentes); 
	if ($salarioBruto <= 1000) {
		$INSS = $salarioBruto * 8.5/100;
	}else { 

		$INSS = $salarioBruto * 9/100;

	} 

	if ($salarioBruto <= 500) {
		$IR = 0;
			
	}elseif ($salarioBruto > 500 && $salarioBruto <= 1000) {
		$IR = $salarioBruto * 5/100; 

	}else { 
		$IR = $salarioBruto * 7/100;

	} 

	$salarioLiquido = $salarioBruto - $INSS - $IR;
	echo "$salarioBruto <br> $INSS <br> $IR <br> $salarioLiquido";


 ?>