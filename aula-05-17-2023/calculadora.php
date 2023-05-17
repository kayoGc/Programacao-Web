<?php 
	function fSomar($num1, $num2) {
		$soma = $num1 + $num2;
		return $soma;
	}

	function fSubtrair($num1, $num2) {
		$subtracao = $num1 - $num2;
		return $subtracao;
	}

	function fMultiplicar($num1, $num2) {
		$multiplicacao = $num1 * $num2;
		return $multiplicacao;
	}

	function fDividir($num1, $num2) {
		$divisao = 0;
		if ($num2 == 0) {
			echo "Impossivel dividir por 0 <br/>";
		} else if ($num1 == 0){
			echo "Impossivel dividir 0 <br/>";
		}
		else {
			$divisao = $num1 / $num2;	
		}
		return $divisao;  
	}


	$num1 = $_POST['numero1'];
	$num2 = $_POST['numero2'];
	$operador = $_POST['operador'];

	switch ($operador) {
		case '+':
			$resultado = fsomar($num1, $num2);
			break;
		case "-":
			$resultado = fSubtrair($num1, $num2);
			break;
		case '*':
			$resultado = fMultiplicar($num1, $num2);
			break;
		case "/":
			$resultado = fDividir($num1, $num2);
			break;
		default:
			echo "Operador inválido";
			break;
	}

	print("$num1 $operador $num2 = "); // melhorar a impresão
	printf("%.2f", $resultado);
?>