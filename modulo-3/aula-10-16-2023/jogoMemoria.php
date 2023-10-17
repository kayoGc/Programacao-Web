<?php 
    class JogoMemoria {
        protected $fotos;

        function __construct()
        {
            $this->fotos = array (
                'img/mario.jpg',
                'img/kayo.jpg'
            );
        }

        function getFotos() {
            return $this->fotos;
        }
    }
