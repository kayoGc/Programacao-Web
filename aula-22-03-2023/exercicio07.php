<?php 	
		$tempo = 50;
		$velocidade = 20;
		$distancia = $tempo * $velocidade;
		$litrosUsados = $distancia / 12;

		printf("Foram usados %.2f litros para percorrer %.2fkm", $litrosUsados, $distancia);
 ?>