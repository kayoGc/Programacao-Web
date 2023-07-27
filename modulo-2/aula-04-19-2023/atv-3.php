<?php 
	$numeros = array(1, 8, -1, 9, 3, 18, 91, 1.7, -10, 19);
	$multiplicador = 5;

	foreach ($numeros as $numero) {
		echo "$numero x $multiplicador = " . $numero * $multiplicador . "<br>";
	}
 ?>