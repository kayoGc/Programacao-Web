<?php 
    class JogoMemoria {
        private $fotosDisponiveis = array (
            'img/mario.jpg',
            'img/kayo.jpg',
            'img/tomate.jpeg',
            'img/vivaldi.jpeg',
            'img/davi.jpeg',
            'img/sonic.jpg',
        );

        private $fotosDoJogo;

        function __construct()
        {
            // TODO: Construção do jogo na declaração da instancia.
        }

        private function selecionarFotos(int $vezes) {
            $fotos = array();
            for ($i = 0; $i < $vezes; $i++) {
                array_push($fotos, $this->fotosDisponiveis[random_int(0, sizeof($this->fotosDisponiveis))]);
            }
            return $fotos;
        }

        private function selecionarModo(string $modo) {
            switch ($modo) {
                case 'facil':
                    $this->fotosDoJogo = $this->selecionarFotos(3);
                    break;
                case 'médio':
                    $this->fotosDoJogo = $this->selecionarFotos(6);
                    break;

                // TODO: modo dificil
            }
        }

        public function fazerJogo() {
            $jogo = "";
            foreach ($this->fotosDisponiveis as $i) {
                $jogo .= "<img class='imgTop' src='{$i}' alt='{$i}'>";
            }
            return $jogo;
        }
                
    }
