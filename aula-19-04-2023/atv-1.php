<?php 

	$notas = array("Maria" => 4, "Mario" => 6, "Mauro" => 7, "Maura" => 9, "Matias" => 6, "Matios" => 8.5, "Manuel" => 7, "Manuela" => 3, "Matuê" => 5, "Matuâ" => 8);
	$somaNotas = 0;
	$maiorNota = 0;
	#$cont = 0;
	while ($i = key($notas)) {
		$somaNotas += $notas[$i];
		#$cont++;
		if ($maiorNota == 0) {
			$maiorNota = $i;
		} elseif ($notas[$maiorNota] < $notas[$i]) {
			$maiorNota = $i;
		}
		next($notas);
	}
	$media = $somaNotas / sizeof($notas);

	echo "A média da sala é: $media. E a maior nota foi do aluno(a) $maiorNota com a nota $notas[$maiorNota]";
 ?>              