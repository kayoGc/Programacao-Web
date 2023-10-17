<?php 
    class Conversor{
        protected float $numero;
        protected string $de;
        protected string $para;
        protected float $resultado;

        function __construct(float $numero, string $de, string $para)
        {
            $this->numero = $numero;
            $this->de = $de;
            $this->para = $para;
            $this->resultado = $this->calcular();
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

        public function getResultado(){
            return $this->resultado;
        }

        private function calcular(){
            switch($this->de){
                case "metro(s)":
                    switch($this->para) {
                        case 'quilometro(s)': return $this->numero /1000; break;
                        case 'centímetro(s)': return $this->numero * 100;  break;
                        case 'milimetro(s)': return $this->numero * 1000; break;
                        default: return $this->numero; break;
                    }
                    break;
                case 'quilometro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero * 1000; break;
                        case 'centímetro(s)': return $this->numero * 100000; break;
                        case 'milimetro(s)': return $this->numero * 1000000; break;
                        default: return $this->numero;
                    } 
                    break;
                case 'centímetro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero / 100; break;
                        case 'milimetro(s)': return $this->numero * 10; break;
                        case 'quilometro(s)': return $this->numero / 100000; break;
                        default: return $this->numero * 1; break;
                    }
                    break;
                case 'milimetro(s)':
                    switch($this->para) {
                        case 'metro(s)': return $this->numero / 100; break;
                        case 'centímetro(s)': return $this->numero / 10; break;
                        case 'quilometro(s)': return $this->numero / 1000000; break;
                        default: return $this->numero; break;
                    }
                    break;
            }
        }
    }
?>