<?php
    class Gorjeta {
        public $valor;
        public $qualidade;
        protected $gorjeta;

        function __construct($valor, $qualidade)
        {
            $this->valor = $valor;
            $this->qualidade = $qualidade;
            $this->gorjeta = $this->valor * ($this->qualidade / 100); 
        }

        function getGorjeta(){
            return $this->gorjeta;
        }

        function getValor() {
            return $this->valor;
        }
    }