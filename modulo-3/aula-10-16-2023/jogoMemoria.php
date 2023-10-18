<?php 
    class JogoMemoria {
        
        /**
         * Imagens disponiveis no jogo
         * @var array
         */
        private $fotosDisponiveis = array ( 
            'img/mario.jpg',
            'img/kayo.jpg',
            'img/tomate.jpeg',
            'img/vivaldi.jpeg',
            'img/davi.jpeg',
            'img/sonic.jpg',
        );

        /**
         * Imagens que serão usadas no jogo atual
         * @var array
         */
        private $fotosDoJogo;

        private $tabuleiro = array();

        /**
         * Constroi o jogo
         * @return void
         */
        function __construct(string $dificuldade)
        {
            // TODO: Construção do jogo na declaração do objeto.
            $this->selecionarDificuldade($dificuldade);
        }

        /**
         * Seleciona as fotos que serão utilizadas na partida
         * @return array
         */
        private function selecionarFotos(int $vezes) {
            $fotos = array();
            for ($i = 0; $i < $vezes; $i++) {
                $foto = $this->fotosDisponiveis[random_int(0, sizeof($this->fotosDisponiveis) - 1)];
                !in_array($foto, $fotos) ? array_push($fotos, $foto) : $i--; 
            }
            return $fotos;
        }

        /**
         * Duplica as fotos selecionadas para a partida
         * @return void
         */
        private function duplicarFotos() {
           $this->fotosDoJogo = array_merge($this->fotosDoJogo, $this->fotosDoJogo);
           shuffle($this->fotosDoJogo);
        }

        /**
         * Seleciona a dificuldade do jogo
         * @return void
         */
        private function selecionarDificuldade(string $modo) {
            switch ($modo) {
                case 'facil':
                    $this->fotosDoJogo = $this->selecionarFotos(3);
                    break;
                case 'médio':
                    $this->fotosDoJogo = $this->selecionarFotos(6);
                    break;

                // TODO: modo dificil
            }
            $this->duplicarFotos();
        }

        private function fazerTabuleiro(int $colunas, int $linhas, array $fotos) {
            for ($i = 0; $i < $linhas; $i++) {
                $fotosNaLinha = array();
                for ($j = 0; $j < $colunas; $j++) {
                    
                }
            }
        }


        public function analisarFotos(string $foto1, string $foto2) {
            return $foto1 == $foto2 ? true : false;
        }


    }
