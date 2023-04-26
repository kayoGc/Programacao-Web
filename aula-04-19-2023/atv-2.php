<?php 

	$valores = array(-1, -2, 10, -15, 5, 7, 6, 18, -10, 2);
	$numPositivo = 0;
	$numNegativo = 0;
	$par = 0;
	$impar = 0;

	foreach ($valores as $i) {
		if ($i < 0) {
			$numNegativo++;
		} else {
			$numPositivo++;
		}

		if ($i % 2 == 0) {
			$par++;
		} else {
			$impar++;
		}
	}

	echo "Tem " . $numPositivo . " números positivos <br>";
	echo "Tem " . $numNegativo . " números negativos <br>";
	echo "Tem " . $par . " números pares <br>";
	echo "Tem " . $impar . " números impares <br>";
 ?>