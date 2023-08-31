<?php

class Contas
{
    var $NumAge;
    var $NumConta;
    var $Nome;
    var $Saldo;

    function ExibeDados()
    {
        print 'Idade: ' . $this->NumAge . "<br>";
        print 'Conta: ' . $this->NumConta . "<br>";
        print 'Nome: ' . $this->Nome . "<br>";
        print 'Saldo: ' . $this->Saldo . "<br> <br>";
    }
}
