<?php
    include 'funcionario.php';
    include 'estagiario.php';

    $pedrinho = new Funcionario();
    $pedrinho->nome = 'Pedrinho';

    $mariana = new Estagiario();
    $mariana->nome = '<br> Mariana';

    echo $pedrinho->nome;
    echo $mariana->nome;
