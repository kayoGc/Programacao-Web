<?php 
    class Conversor{
        protected float $numero;
        protected string $de;
        protected string $para;
        protected float $resultado;

        public function setNumero($numero){
            $this->numero=$numero;
        }
        public function setDe($de){
            $this->de=$de;
        }
        public function setPara($para){
            $this->para=$para;
        }
        public function getNumero(){
            return $this->numero;
        }
        public function getDe(){
            return $this->de;
        }
        public function getPara(){
            return $this->para;
        }

        function calcular(){
            switch($this->de){
                case "metros":
                    if($this->para=="quilometros") $this->resultado = $this->numero /1000;

            }
            
        }
        function getResultado(){
            return $this->resultado;
        }
    }




?>