<?php  

	function dobro($n){
		$d = $n * 2;
		
		return $d; 
	} 

	$x = dobro(6); 
	echo "<br/> O dobro de ".$x. " = ".dobro($x);
?>