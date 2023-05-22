<?php

    $notas = array($_POST['nome1'] => $_POST['nota1'],
    $_POST['nome2'] => $_POST['nota2'],
    $_POST['nome3'] => $_POST['nota3'], 
    $_POST['nome4'] => $_POST['nota4'], 
    $_POST['nome5'] => $_POST['nota5']);

    $somaNotas = 0;
    $maiorNota = 0;
    #$cont = 0;
    while ($i = key($notas)) {
        $somaNotas += $notas[$i];
        #$cont++;
        if ($maiorNota == 0) {
            $maiorNota = $i;
        } elseif ($notas[$maiorNota] < $notas[$i]) {
            $maiorNota = $i;
        }
        next($notas);
    }
    $media = $somaNotas / sizeof($notas);

    echo "A média da sala é: $media. E a maior nota foi do aluno(a) $maiorNota com a nota $notas[$maiorNota]";
