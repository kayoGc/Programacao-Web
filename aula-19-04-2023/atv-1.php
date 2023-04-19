<?php 

	$notas = array("Maria" => 10, "Mario" => 5);
	$somaNotas = 0;
	$maiorNota = 0;
	$nomeMN = "";
	while ($i = key($notas)) {
		$somaNotas += $notas[$i];
		if ($maiorNota == 0) {
			$maiorNota = $i;
		}
	}
 ?>