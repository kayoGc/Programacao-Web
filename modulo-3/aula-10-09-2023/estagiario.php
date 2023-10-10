<?php
    class Estagiario extends Funcionario{

        //Método getSalario sobrescrito retorna o $salario com 12% de bonus
        function getSalario()
        {
            return $this->salario * 1.12;
        }
    }



?>