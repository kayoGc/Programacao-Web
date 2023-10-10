<?php
    class Gorjeta {
        public $valor;
        public $qualidade;
        protected $valorTotal;
        protected $gorjeta;

        function __construct($valor, $qualidade)
        {
            $this->valor = $valor;
            $this->qualidade = $qualidade;
            $this->gorjeta = $this->valor * ($this->qualidade / 100);
            $this->valorTotal = $this->valor + $this->gorjeta; 
        }

        function getGorjeta(){
            return $this->gorjeta;
        }

        function getValorTotal() {
            return $this->valorTotal;
        }

        function getValor() {
            return $this->valor;
        }
    }