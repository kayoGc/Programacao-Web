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
}