<?php

class Conta
{
    var $agencia;
    var $codigo;
    var $dataDeCriacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelada;

    function retirar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo -= $quantia;
        }

    }

    function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    function obterSaldo()
    {
        return $this->saldo;
    }

    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo){
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
       
        // chamada a outro método da classe
        $this->depositar($saldo);
        $this->cancelada = false;
        
    }

    // método destrutor finaliza objeto
    function __destruct(){
        echo "<br> Objeto Conta {$this->codigo} de {$this->titular->nome} finalizada ...<br>";
    }
}