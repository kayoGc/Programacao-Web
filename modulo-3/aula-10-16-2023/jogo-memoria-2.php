<?php 

    class JogoDaMemoria2 {
       
        public function opa()
        {
            session_start();
            if(!isset($_SESSION['jogo'])) $_SESSION['opa'] = 'eae'; return 'opa';

             return $_SESSION['opa'];
        }
    }