<?php

    include 'funcionario.php';
    include 'estagiario.php';

    $pedrinho = new Estagiario();

    $pedrinho->setSalario(500);

    echo "O salário do Pedrinho é R$: " . $pedrinho->getSalario() . "<br>";
