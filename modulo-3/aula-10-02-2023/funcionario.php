<?php 
    class Funcionario{

        private $codigo;
        private $nome;
        private $nascimento;
        private $salario;

        function __construct($codigo, $nome, $nascimento, $salario)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            if (is_numeric($salario) && ($salario > 0)) {
                $this->salario = $salario;
            }
        }

        // atribui o salario a variavel salario
        function setSalario($salario) {
            if (is_numeric($salario) && ($salario > 0)) {
                $this->salario = $salario;
            }

        }

        // retorna o valor de salário
        function getSalario() {
            return $this->salario;
        }

        function getAll() {
            return array(
                'codigo' => $this->codigo,
                'nome' => $this->nome,
                'dataNascimento' => $this->nascimento,
                'salario' => $this->salario,
            );
        }
    }

?>
