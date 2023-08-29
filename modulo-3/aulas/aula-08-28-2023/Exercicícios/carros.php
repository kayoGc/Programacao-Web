<?php

class Carro {
    var $Cor;
    var $Ano;
    var $NumeroPortas;
    var $Peso;
    var $Velocidade = 0;

    function Acelerar() {
        
    }

    function InformarCar() {
        print 'Cor: ' . $this->Cor . "<br>";
        print 'Ano: ' . $this->Ano . "<br>";
        print 'Número de portas: ' . $this->NumeroPortas . "<br>";
        print 'Peso: ' . $this->Peso . "<br>";
        print 'Velocidade: ' . $this->Velocidade . "<br> <br>";
    }
}