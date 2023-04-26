<?php 
	$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
	while($chave = key($nomes)) {
		

		echo "<br/> " . $chave;
		next($nomes);
	}
 ?>
